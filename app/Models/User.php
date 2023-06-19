<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function todos(){
        $this->hasOne(User::class);
    }

    public function isSuperAdmin()
    {
        return $this->hasrole('super-admin');
    }

    public static function getRoleNamesArray(){
        $roles = Role::pluck('name');
        $rolenames=[];
         foreach($roles as $index => $role){
            $rolenames[$role] = ucwords($role);
         }
         return $rolenames;
    }

    public static function getRoleNames(){
        $roles = Role::where('id','!=',0)->pluck('name');
        $rolenames=[];
        
        foreach ($roles as $index=>$role){
            $rolenames[$role] = ucwords($role);
        }
        return $rolenames;
    }

    public function getRoleNameAttribute(){
        if($this->roles !=null && sizeof($this->roles)!=0){
            return ucwords($this->roles[0]->name); 
           }
           else{
            return ('No Role Assigned');
           }
    }


}
