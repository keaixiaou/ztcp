<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 2016/10/11
 * Time: 下午4:36
 */

return array(
    'cache'=>array(
        'locale' => array(
            'adapter' => 'Yac',
            'name' => 'lc',
        ),
        'net' => array( //网络cache配置
            'adapter' => 'Redis',
            'name' => 'nc',
            'pconnect' => true,
            'host' => '127.0.0.1',
            'auth' => '123456',
            'port' => 6379,
            'timeout' => 5
        ),
    ),
);