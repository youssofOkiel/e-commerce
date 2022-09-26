<?php

namespace App\Models;

use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $price
 * @property mixed $variations
 */
class Product extends Model
{
    use HasFactory;

    /**
     * @return Money
     */
    public function formattedPrice(): Money
    {
        return money($this->price);
    }

    public function variations(): HasMany
    {
        return $this->hasMany(Variation::class);
    }
}
