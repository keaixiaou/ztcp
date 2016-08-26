<?php
define('CHAT_MSG_EOF','##||##');

use \ZPHP\Socket\Adapter\Swoole;

return array(
    'server_mode' => 'Socket',
    'project_name' => 'zphp',
    'app_path' => 'apps',
    'ctrl_path' => 'ctrl',
    'socket' => array(
        'host' => '0.0.0.0',                          //socket 监听ip
        'port' => 8991,                             //socket 监听端口
        'adapter' => 'Swoole',                          //socket 驱动模块
        'server_type' => Swoole::TYPE_TCP,              //socket 业务模型 tcp/udp/http/websocket
        'daemonize' => 1,                             //是否开启守护进程
        'heartbeat_check_interval' => 65,
        'heartbeat_idle_time' => 70,
        'client_class' => 'socket\\Swoole',            //socket 回调类
        'protocol' => 'Json',                         //socket通信数据协议
        'work_mode' => 3,                             //工作模式：1：单进程单线程 2：多线程 3： 多进程
        'worker_num' => 1,                                 //工作进程数
        'dispath_mode' => 2,
        'open_eof_check' =>1,//处理粘包
        'package_eof' => CHAT_MSG_EOF,
        'open_eof_split' => 1,
        'max_request' => 0,                            //单个进程最大处理请求数
        'debug_mode' => 1,                                  //打开调试模式

    ),

    'project'=>array(
        'name'=>'zphp',                 //项目名称。(会做为前缀，隔离不同的项目)
        'view_mode'=>'String',   		//view模式
        'ctrl_name'=>'a',				//ctrl参数名
        'method_name'=>'m',				//method参数名    http://host/?{action_name}=main\main&{method_name}=main
        'pid_path'  => ROOTPATH.'/webroot',
        'mvc'  => array('module'=>'Home', 'controller' => 'Index', 'action' => 'index'),
        'reload' => DEBUG,
    )

);
