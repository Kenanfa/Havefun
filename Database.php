<?php
/**
 * Created by PhpStorm.
 * User: thena_000
 * Date: 12/22/2016
 * Time: 11:40 AM
 */
include "includes/php/medoo.php";

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'havefun',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '12345678',
    'charset' => 'utf8'
]);
