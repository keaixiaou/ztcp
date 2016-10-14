<?php
define('CHAT_MSG_EOF','\r\n');

use \ZPHP\Socket\Adapter\Swoole;

return array(
    'server_mode' => 'Socket',
    'project_name' => 'zphp',
    'app_path' => 'apps',
    'ctrl_path' => 'ctrl',
    'common_file'  => '/library/function.php',
    'socket' => array(
        'host' => '0.0.0.0',                          //socket 监听ip
        'port' => 8991,                             //socket 监听端口
        'log_file' => ROOTPATH.'/log/system/swoole.log',
        'adapter' => 'Swoole',                          //socket 驱动模块
        'server_type' => Swoole::TYPE_TCP,              //socket 业务模型 tcp/udp/http/websocket
        'daemonize' => 0,                             //是否开启守护进程
        'heartbeat_check_interval' => 65,
        'heartbeat_idle_time' => 70,
        'client_class' => 'socket\\Swoole',            //socket 回调类
        'protocol' => 'Json',                         //socket通信数据协议
        'work_mode' => 3,                             //工作模式：1：单进程单线程 2：多线程 3： 多进程
        'worker_num' => 1,                                 //工作进程数
        'dispath_mode' => 2,
        //结束符协议
//        'open_eof_check' =>1,//处理粘包
//        'package_eof' => CHAT_MSG_EOF,
//        'open_eof_split' => 1,
        //固定包头协议
        //N表示整形4个字节;n表示short,2个字节数字

        'open_length_check' => 1,
        'package_length_type' => 'l',
        'package_length_offset' => 0,
        'package_body_offset' => 0,
//


        'package_max_length' => 8000,

        'max_request' => 0,                            //单个进程最大处理请求数
        'debug_mode' => 1,                                  //打开调试模式

    ),

    'project'=>array(
        'log_path' => 'socket',
        'name'=>'zphp',                 //项目名称。(会做为前缀，隔离不同的项目)
        'view_mode'=>'String',   		//view模式
        'ctrl_name'=>'a',				//ctrl参数名
        'method_name'=>'m',				//method参数名    http://host/?{action_name}=main\main&{method_name}=main
        'pid_path'  => ROOTPATH.'/webroot',
        'mvc'  => array('module'=>'Home', 'controller' => 'Index', 'action' => 'index'),
        'reload' => DEBUG,
    )

);
