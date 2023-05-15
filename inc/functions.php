<?php

function pluck($arr, $key){
    $result = array_map(function($item) use($key){
        return $item[$key];
    }, $arr);
    return $result;
}

function sum($a, $b){
    $result = $a + $b;
    return $result;
}

function output($value){
    echo '<pre>';
    print_r($value) ;
    echo '</pre>';
}