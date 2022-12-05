<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    
    protected $fillable = ['bread','size','extras','veggies','sauces'];
    protected $casts = [
        'extras' => 'array',
        'veggies' => 'array',
        'sauces' => 'array'
    ];
}
