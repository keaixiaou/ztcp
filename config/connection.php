<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 16/8/26
 * Time: 下午5:27
 */

return [
    'connection'=>array(
    'adapter' => 'Redis',
    'name' => 'cr',
    'pconnect' => true,
    'host' => '127.0.0.1',
    'port' => 6379,
    'timeout' => 5,
    'prefix' => 'zchat'
)
];