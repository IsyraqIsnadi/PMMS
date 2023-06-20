<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',   // User ID associated with the payment
        'date',      // Date of the payment
        'method',    // Payment method used
        'status',    // Status of the payment (e.g., completed, pending)
        'item',      // Item or service purchased
        'total',     // Total amount paid
    ];

    /**
     * Get the user associated with the payment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        $this->belongsTo(User::class);  // Relationship with the User model
    }
}
