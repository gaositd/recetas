<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyIngredient extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id',
        'IngredientName',
        'QuantityAvalilable',
        'BuyDate'
    ];
}
