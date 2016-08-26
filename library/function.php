<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 16/8/26
 * Time: 下午5:07
 */

function Zsend($from, $to, $data){
    $from->send($to, $data.CHAT_MSG_EOF);
}