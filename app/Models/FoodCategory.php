<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Collection;
use phpDocumentor\Reflection\Types\Object_;

class FoodCategory extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable=[
      'name','description','status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    public static function getActiveCategory()
    {
        return self::where('status', true)->get();
    }

    public function foodItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(FoodItems::class);
    }

    public function note(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CategoryNote::class);
    }
}
