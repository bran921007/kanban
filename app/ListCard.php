<?php

namespace App;

use App\Card;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ListCard extends Model
{
    protected $guarded = [];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class, 'list_card_id');
    }
}
