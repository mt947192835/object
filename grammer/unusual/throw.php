<?php

function throwDemo($num){
    if($num <0){
        throw new Exception("异常提示-数字必须大于0");
    }else{
        return true;
    }
}
try{
    throwDemo(-1);
    echo "正常执行";
}catch(Exception $e){
    echo "异常捕捉：".$e->getMessage();
}