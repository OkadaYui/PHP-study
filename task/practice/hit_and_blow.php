<?php
    echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
    echo $count,"回目のチャレンジです！\n";
    echo "3桁の半角数字を重複なしで入力してください：";
    $number = fgets(STDIN);
    if( $number === $random ){
        echo "正解です！",$count,"回目でクリアです！！";
        break;
    }
?>

/*
◆重複しないランダムな3桁の数値の生成

◆重複判定
    それぞれ100,10,1で割って切り捨て
    →入力チェック
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

*/