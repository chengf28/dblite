<?php 
require_once __DIR__."/../vendor/autoload.php";
use DBlite\QueryBuilder;
use DBlite\Connect;
use DBlite\DBlite;

$config = [
    // 预留配置,可不填写,目前仅支持mysql
    'dbtype' => 'MYSQL',
    // 'read' => [
    //     'host'   => '127.0.0.1',
    //     'port'   => 3306,
    //     'dbname' => 'read_test',
    // ],
    // 'write' => [
        'host'   => '127.0.0.1',
        'port'   => 3306,
        'dbname' => 'test',
    // ],
    'user'   => 'root',
    'pswd'   => 'root',
    // 相同用户名和密码,其他配置相同也可以
];

try{
    DBlite::config($config);
    $data = [[
        'token' => 'token1',
        'where' => 'where1',
        'test'  => 'test1',
    ],
    [
        'where' => 'where2',
        'test'  => 'test2',
        'token' => 'token2',
    ]];
    $db = DBlite::table('table1')->insert($data);
    var_dump($db);
    
}catch(\Exception $e)
{
    var_dump($e->getMessage());
}