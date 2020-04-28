<?php

// 오토로드
spl_autoload_register(function($name){
    echo $name."를 로드 합니다.";
    include "modules\\".$name.".php";
    //exit; // 종료
    // require $name.".php";
});