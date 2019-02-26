<?php
ini_set('session.gc_maxlifetime', 60);
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="codemirror/lib/codemirror.js"></script>
    <script src="codemirror/mode/javascript/javascript.js"></script>
    <link rel="stylesheet" href="codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="codemirror/theme/default.css">
<!--    <link rel="stylesheet" href="../main.css">-->
    <style type="text/css">
    body{
        background-color: #7fb4ea;
    }
        #frm{
            border: 5px solid yellow;
            padding: 50px;
            margin-top: 50px;
            color: green;
        }
        textarea{
            background-color: #7fba71;
            color:white;
            font-size: 1.5em;
            font-weight: bold;
        }

    </style>
</head>
<body>

</body>
</html>
<?php


if($_GET["p"]=='exit') {
    session_start();
    $_SESSION = array();
    session_destroy();
    header('Location: ../index.php');
    exit;}



$access = array();
$access = file("pass.php");
$loginA = trim($access[1]);
$passwA = trim($access[2]);
//костыль ебаный
if(!empty($_POST['enter']) && $loginA == sha1($_POST['login']) && $passwA == sha1($_POST['passw']) )
//костыль ебаный
{


    $_SESSION['login'] = sha1($_POST['login']);
    $_SESSION['passw'] = sha1($_POST['passw']);
}
if(empty($_SESSION['login']) or
    $loginA != $_SESSION['login'] or
    $passwA != $_SESSION['passw'] )
{
    ?>
    <center> <form action=index.php method=post id="frm">
            Логин <input class=input name=login value="">
            Пароль <input class=input name=passw value=""><br><br>
            <input type=hidden name=enter value=yes>
            <input class=button type=submit value="Вход"> </center>
    <?php die; }

?>

<?php
$file_txt="../config/config.ini"; //путь к файлу настроек
$otp=$_REQUEST['otp'];
$txt=$_REQUEST['txt'];
if(isset($otp)){
    $fopen=fopen($file_txt,"w");
    fputs($fopen,$txt);
    fclose($fopen);
//    header("location: http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
//    header("location: http://scd-fit.ru/main.php");
//    exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta charset="utf-8">
    <script src="codemirror/lib/codemirror.js"></script>
    <script src="codemirror/mode/javascript/javascript.js"></script>
    <link rel="stylesheet" href="codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="codemirror/theme/default.css">

</head>
<body>
<form name=forma method=post action="">
    <textarea name=txt rows=30 cols=100><?php @include($file_txt);?></textarea><br><br>
    <input type=submit name=otp value=ПРИМЕНИТЬ>
</form>
<h1>Вы в админке<br><a href="../index.php?p=exit">ВЫЙТИ</a></h1>
</body>
<script type="text/javascript">

    var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('code'), {
        lineNumbers: true,               // показывать номера строк
        matchBrackets: true,             // подсвечивать парные скобки
        mode: 'application/x-httpd-php', // стиль подсветки
        indentUnit: 4                    // размер табуляции
    });
    myCodeMirror;

</script>
</html>