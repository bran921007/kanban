<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded = [];
    protected $table = 'cards';

    public function listcard()
    {
        return $this->belongsTo(ListCard::class, 'listcard_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
