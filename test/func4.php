<?php

$args=[
    'hello' => "안녕",
    'msg' => "대림이"
];

function greeting($args){ // 매개변수
    // extract($args); // 배열을 로컬변수로 분해
    // echo $hello." ".$msg.".";
    foreach($args as $key => $value){
        // echo $key."=".$value."\n";
        $key($value);
    }
}

function hello($v){
    echo $v." ";
}

function msg($v){
    echo $v." ";
}

// 선언->호출
// 1
greeting($args); // 인자값

$args2=[
    'hello' => "안녕",
    'msg' => "대림이"
];