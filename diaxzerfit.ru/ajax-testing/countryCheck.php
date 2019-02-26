<?php
/**
 * Created by PhpStorm.
 * User: yty
 * Date: 29.06.2018
 * Time: 13:52
 */
if($_GET["country"] == 1)
    echo
    json_encode(array("1"=>"Washington","2"=>"Sietle"));
else if($_GET["country"] == 2)
    echo
    json_encode(array("3"=>"paris","4"=>"marsele"));