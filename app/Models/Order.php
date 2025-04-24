<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'items', 'total', 'status'];

    protected $casts = [
        'items' => 'array', // This will convert the string to an array when fetching from the database
    ];

    use HasFactory;
}
