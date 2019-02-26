<?php
/**
 * Created by PhpStorm.
 * User: yty
 * Date: 28.06.2018
 * Time: 14:17
 */
$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);
if($connection == false){
    echo "Не удалось подключиться к базе данных";
    echo mysqli_connect_error();
    exit();
}