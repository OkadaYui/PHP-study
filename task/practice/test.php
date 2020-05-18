<?php
    echo "こんにちは\n";
    echo "1~9が格納された配列を生成します\n";
    $random = array();
    for( $i = 1; $i < 10; $i++ ){
        $random[$i-1] = $i;
        echo $random[$i-1]," ";
    }
    echo "配列の中身をシャッフルします\n";
    shuffle( $random );
    print_r( $random );
    echo "3桁の重複しない値をつくります\n";
    echo "まずはそれぞれ100倍、10倍、1倍します\n";
    $random[0] *= 100;
    echo $random[0],"\n";
    $random[1] *= 10;
    echo $random[1],"\n";
    echo $random[2],"\n";
    echo "それらを足し合わせます";
    echo $random[0],"+",$random[1],"+",$random[2],"\n";
    echo "answer1は愚直に足してみたものです\n";
    $answer1 = $random[0] + $random[1] + $random[2];
    echo $answer1,"\n";
    echo "answer2はfor文を使って足し算のループを行ったものです\n";
    $answer2 = 0;
    for( $j = 0; $j < 3; $j++){
        $answer2 += $random[$j];
    }
    echo $answer2,"\n";
    echo "重複しない3桁の値が生成されました";
    echo "生成した値：",$answer1,"\n";
    
    
    
?>