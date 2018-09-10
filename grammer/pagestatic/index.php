<?php
/**
 * User: mt
 * Date: 2018/9/10
 */
$data = [
    'name'=>'mt',
    'age'=>18,
    'height'=>173
];
ob_start();
include("index.blade.php");
file_put_contents("index.html",ob_get_clean());