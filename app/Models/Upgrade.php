<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'plan',
        'previous_plan',
        'type',
        'previous_type'
    ];
}
