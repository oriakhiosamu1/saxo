<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = [
        'pin',
        'address',
        'amount',
        'plan',
        'bank_name',
        'account_name',
        'account_number',
        'method',
        'user_id'
    ];
}
