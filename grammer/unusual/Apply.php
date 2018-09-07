<?php
/**
 * User: mt
 * Date: 2018/9/7
 */
try {
    throw new Exception('wrong');
} catch(Exception $ex) {
    echo 'Error:'.$ex->getMessage().'<br>';
    echo $ex->getTraceAsString().'<br>';
}
echo '异常处理后，继续执行其他代码';