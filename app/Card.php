<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded = [];

    public function listcard()
    {
        return $this->hasOne(ListCard::class);
    }
}
