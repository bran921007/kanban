<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListCard extends Model
{
    protected $guarded = [];

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
