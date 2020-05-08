<?php
    $heat = 37.3;
    if($heat <= 37.0){
        echo "平熱です。";
    }else if($heat >= 37.0 && $heat < 37.5){
        echo "微熱です";
    }else{
        echo "コロナの可能性あり";
    }
?>