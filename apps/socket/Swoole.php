<?php

namespace socket;

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
        list($serv, $fd, $fromId, $data) = func_get_args();
        if (empty($data)) {
            return;
        }
        $datas = explode(CHAT_MSG_EOF, $data);
        foreach($datas as $_data) {
            if(empty($_data)) {
                continue;
            }
//            Request::parse(common\Cmd::parseData(json_decode($_data)));
//            $result = ZRoute::route();
            echo $_data;
            $result = $_data;
            if($result) {
//                Request::getSocket()->send($fd,$result);
                Zsend($serv,$fd, $result);
            }
        }
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
        var_dump(Config::get('connection'));
    }

}
