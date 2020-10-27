<?php

namespace App;

use App\Card;

use Illuminate\Database\Eloquent\Model;

class ListCard extends Model
{
    protected $guarded = [];

    protected $table = 'list_cards';

    public function cards()
    {
        return $this->hasMany(Card::class, 'listcard_id');
    }

    public function test()
    {
        dd("f ");
    }
}
