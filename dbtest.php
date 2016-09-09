<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    /*$con=mysql_connect('127.0.0.1', 'root', '') or die('Connect is Failed');
    print "Connect is Success";
    mysql_select_db('php');
    mysql_close($con);*/
    /*
    $mysqli=new mysqli('127.0.0.1', 'root', '','php');
    if($mysqli->connect_error){
    or die('connect is terminated');
    }
    print "connect is success";
    $mysqli->close;*/
    $pdo=new PDO('mysql:host=127.0.0.1;dbname=php;charset=utf8','root','')
    print 'Connect is Success';
    $pdo=null;
    ?>
</body>
</html>