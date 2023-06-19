<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $primaryKey = 'report_id';
    
    protected $fillable = [
        'user_id',
        'report_type',
        'start_date',
        'end_date',
        'status',
        'file_name',
        'created_date',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define the relationship with the Roster model
    public function roster()
    {
        return $this->belongsTo(Roster::class);
    }
}
