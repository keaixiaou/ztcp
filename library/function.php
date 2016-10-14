<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 16/8/26
 * Time: 下午5:07
 */

function Zsend($to, $data){

    if(\ZPHP\Core\Config::get('socket','open_length_check')){
        $head = pack('l', strlen($data));
        \ZPHP\Protocol\Request::getSocket()->send($to,$head.$data);
    }else{
        \ZPHP\Protocol\Request::getSocket()->send($to,$data.CHAT_MSG_EOF);
    }
}