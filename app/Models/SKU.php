<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKU extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_item_id',
        'attribute_id',
        'price',
        'status',
    ];

    public static function getSkuByFoodItemId($foodItemId)
    {
        return self::where('food_item_id', $foodItemId)->get();
    }

    public function foodItem(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(FoodItems::class);
    }
    public function attribute(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }

}
