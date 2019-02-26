<?php
/**
 * Created by PhpStorm.
 * User: yty
 * Date: 28.06.2018
 * Time: 19:35
 */

require "../oop/dbconnectoop.php";

$name = $_POST['name'];
$lastname = $_POST['lastName'];
$number = $_POST['number'];
$email = $_POST['email'];

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}
//возвращает тру елси попадаю в 255 символов
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < 0 || mb_strlen($value) > 255);
    return !$result;
}



$mysqly = new mysqli("localhost","root","scuderia1","scd-fit");
$mysqly->query("SET NAME 'utf8'");



$name = clean($name);
$lastname = clean($lastname);
$email = clean($email);
$number= clean($number);

if(!empty($name) && !empty($lastname) && !empty($email) && !empty($number)) {
    $success = $mysqly->query("INSERT INTO `clients-data` (`name`, `lastname`, `emale`, `number`) VALUES ('$name', '$lastname', '$email', '$number')");
    $mysqly->close();
}
else{
    json_encode(array("1"=>"Пожалуйста заполните все поля"));
}








$to = "$email";
$subject = "CROSS FIT CLUB";
$message = "Здравствуйте,\n мы предоставляем вам купон\n на 20% скидки на первые\n 3 посещения, при \nпредостовлении кодового \nслова REDDEVIL. для уточнения\n информации о записи
\nзвоните по телефону \n+749587414054, без \nвыходных с 08:00 дом 22:00";
$send = mail($to, $subject, $message, "Content-type:text/plain; charset = UTF-8\r\nFrom:orders@site.com");
if($send){
    echo "+";
    }
    else {
    echo "-";
    }
