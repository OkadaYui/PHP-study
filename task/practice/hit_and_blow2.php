<?php

    /*
        $random：1~9を格納した配列、シャッフルを用いて順番を並べ替える
        $answer：答えとなる3桁の重複しない値
            $hund：3桁目の値を100倍した値
            $ten：2桁目の値を10倍した値
            $one：1桁目の値
        $number：ユーザーが入力する値
        $count：チャレンジ回数
        $hit：hit数
        $blow：blow数
    */

    //答えとなる重複しない3桁の値の生成
    $random = array();
    for( $i = 1; $i < 10; $i++ ){
        $random[$i-1] = $i;
    }
    shuffle($random);
    $hund = $random[0] * 100;
    $ten = $random[1] * 10;
    $one = $random[2];
    $answer = $hund + $ten + $one;
    //答えの確認(後で削除)    
    echo $answer,"\n";
    
    echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
    echo "n回目のチャレンジです！\n";
    echo "3桁の半角数字を重複なしで入力してください:";
    $number = fgets(STDIN);
    
    var_dump(strlen($number));
    
    //入力した値の確認(後で削除)
    echo "あなたが入力した数字:",$number,"\n";
    
    $hit = 1;
    $blow = 1;
    
    echo "Hit：",$hit,", Blow：",$blow,"です。\n";
    
    echo "エラー:3桁の半角数字を重複なしで入力してください！\n";
    
    
    
    echo "正解です！n回目でクリアです！\n";

?>