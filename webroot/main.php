<?php

use ZPHP\ZPHP;

define("ROOTPATH", dirname(__DIR__));
define('DEBUG',false);
require  ROOTPATH.'/ZPHP/ZPHP.php';

ZPHP::run(ROOTPATH);