<?php
/*
    $random : 1～9の数字を格納する配列
    $answer：答えとなる3桁の数値
    $number : ユーザーが入力した数値
    $count : チャレンジ回数
*/

//答えとなる乱数を生成する関数
$random = [];

echo "こんにちは";

 for( $i = 1; $i < 10; $i++ ){
     $ramdom[$i-1] = $i;
     $i++;
     echo $random[$i];
 }

//乱数を生成(関数randを実行)


//生成した乱数と入力した数値が一致するまで繰り返す
    while( $answer === $number ){
        echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
        echo $count,"回目のチャレンジです！\n";
        echo "3桁の半角数字を重複なしで入力してください：";
        $number = fgets(STDIN);
        
        //桁数チェック
        
        
        
        $count++;
    }
    
    echo "正解です！",$count,"回目でクリアです！！";
    
/*
◆重複しないランダムな3桁の数値の生成
    一桁の乱数を3つ生成
    →重複がないかチェック
    →重複がなければ"文字列として"連結
    →数値化
◆重複判定
    文字列化？？？
◆桁数判定
    $number = fgets(STDIN);
    $abs = abs($number);
    //絶対値を返す
    $i = 0;
    
    while( 1 <= $abs ) {
    	$abs /= 10;
    	$i++;
    }
    
    $iは桁数なので$iが3じゃない場合はアラート
◆正解するまでループ
    while文？
    while($random === $ans){
        入力;
        判定;
        $count++;
    }
*/

?>


