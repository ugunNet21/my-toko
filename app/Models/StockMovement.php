<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'date',
        'movement_type',
        'quantity',
        'description',
    ];
}
