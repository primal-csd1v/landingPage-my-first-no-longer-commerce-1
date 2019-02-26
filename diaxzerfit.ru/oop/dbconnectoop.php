<?php
/**
 * Created by PhpStorm.
 * User: yty
 * Date: 28.06.2018
 * Time: 17:00
 */
class db
{
    private $server;
    private $userName;
    private $password;
    private $dbname;
    public function __construct($server, $userName, $password, $dbname)
    {
        $this->server = $server;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbname = $dbname;
        $connection = mysqli_connect($this->server, $this->userName, $this->password, $this->dbname);
        if ($connection == false) {
            echo "Не удалось подключиться к базе данных";
            echo mysqli_connect_error();
            exit();

        }
    }

    public function changeUser($server, $userName, $password, $dbname){
        $this->server = $server;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbname = $dbname;
    }
    public function getDataToDateBase(){

    }

}

//$objdb = new db('localhost','root','scuderia1','scd-fit');
//
