<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //Listingモデルとのアソシエーションの追加20200515
    //Card-Listing：1対1でつなぐ
    //親要素を1つしかもっていないのでlistingは単数形
    public function listing()
    {
        return $this->belongsTo('App\Listing');
    }
}
