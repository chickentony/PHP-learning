<?php

if(!defined('ROOT')) {
    define('ROOT', realpath(__DIR__  .  '/../'));
}

if(!defined('PUBLIC_DIR')) {
    define('PUBLIC_DIR', 'ROOT_DIR' . '/public/');
}

if(!defined('CONFIG')) {
    define('CONFIG', 'ROOT_DIR' . '/config/');
}

if(!defined('UPLOAD')) {
    define('UPLOAD', 'PUBLIC_DIR' . '/upload/');
}

if(!defined('TPL_DIR')) {
    define('TPL_DIR', 'ROOT_DIR' . '/templates/');
}
