<?php

namespace socket;

use service\Chat;
use ZPHP\Core\Config;
use ZPHP\Protocol\Request;
use ZPHP\Socket\Callback\Swoole as ZSwoole;
use ZPHP\Socket\IClient;
use ZPHP\Core\Route as ZRoute;
use common;

class Swoole extends ZSwoole
{


    public function onReceive()
    {
        list($server, $fd, $fromId, $data) = func_get_args();
        var_dump('data:'.$data);
        $head = unpack('l',substr($data, 0, 4));
        echo print_r($head);
        Zsend($fd, 'response');
        return;

//        if (empty($data)) {
//            return;
//        }
//        $datas = explode(CHAT_MSG_EOF, $data);
//        foreach($datas as $_data) {
//            if(empty($_data)) {
//                continue;
//            }
//            $cmd = common\Cmd::parseData(json_decode($_data));
////            Request::parse(common\Cmd::parseData(json_decode($_data)));
//            $chat_service = new Chat();
//            $chat_service->check($cmd['uid'], $cmd['token']);
////            $result = ZRoute::route();
//            echo $_data;
//            $result = $_data;
//            if($result) {
//                Request::getSocket()->send($fd,$result);
//                Zsend($serv,$fd, $result);
//            }
//        }
    }

    public function onConnect(){
        list($serv, $fd) = func_get_args();
//        echo 'serv:'.print_r($serv, true);
        echo 'fd:'.$fd." connect\n";
    }

    public function onClose()
    {
//        Request::setFd(func_get_arg(1));
//        Request::parse([
//            'a'=>'chat',
//            'm'=>'offline'
//        ]);
//        ZRoute::route();
        echo 'fd:'.func_get_arg(1).';close'."\n";
    }

}
