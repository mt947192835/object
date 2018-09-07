<?php
/**
 * User: mt
 * Date: 2018/9/7
 */
try {
    throw new Exception('wrong');
} catch(Exception $ex) {
    $msg = 'Error:' . $ex->getMessage() . "\n";
    $msg .= $ex->getTraceAsString() . "\n";
    $msg .= '异常行号：' . $ex->getLine() . "\n";
    $msg .= '所在文件：' . $ex->getFile() . "\n";
    //将异常信息记录到日志中
    file_put_contents('error.log', $msg);
}