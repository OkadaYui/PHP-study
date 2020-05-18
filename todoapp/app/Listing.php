<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //Cardモデルとのアソシエーションの追加20200514
    //Listing-Card：1対多でつなぐ
    public function cards(){
        //$this：このテーブルを指す
        //App\Cardモデルを多数もっている
        return $this->hasMany('App\Card');
    }
}
