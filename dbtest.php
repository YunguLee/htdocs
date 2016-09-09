<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $con=mysql_connect('127.0.0.1', 'root', '') or die('Connect is Failed');
    print "Connect is Success";
    mysql_select_db('php');
    mysql_close($con);
    ?>
</body>
</html>