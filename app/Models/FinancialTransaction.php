<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialTransaction extends Model
{
     protected $fillable = [
        'description',
        'amount',
        'type',
        'status',
        'user_id'
    ];

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmado');
    }
}
