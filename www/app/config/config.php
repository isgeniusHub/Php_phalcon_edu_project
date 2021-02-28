<?php

defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?:
   realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new \Phalcon\Config([
   'database' => [
       'adapter'  => 'Mysql',
       'host'     => '172.26.176.1',
       'username' => 'user',
       'password' => 'test',
       'dbname'   => 'myDb',
       'port'     => '33060',
       "options"  => [
           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
           PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
           PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
           PDO::ATTR_CASE => PDO::CASE_LOWER
       ]
   ]
]);
