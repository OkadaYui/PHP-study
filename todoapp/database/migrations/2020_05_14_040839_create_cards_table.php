<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');//titleの追加20200514
            $table->string('memo');//memoの追加20200515
            $table->integer('listing_id')->unsigned();//listing_idの追加20200515
            $table->timestamps();
            
            //外部キー制約付きのテーブルの連携20200515
            //なくてもできるがテーブルの設計としてはあった方がきれい
            //実際listingテーブルのところはなくてもできてた
            $table->foreign('listing_id')//isting_idとは
                  ->references('id')//(listings内では)idとして取り扱っている
                  ->on('listings')//listings参照
                  ->onDelete('cascade');//親要素が消されたら子要素も消す
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
