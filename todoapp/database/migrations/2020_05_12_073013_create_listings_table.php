<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');// ここにtitleカラムの記述
            $table->integer('user_id');// ここにuser_idカラムの記述
            $table->timestamps();
            
            //===== ヒント =====
            // $table->データ型('カラム名')
            // スライドにあるリスト機能のテーブル設計を確認しましょう
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}