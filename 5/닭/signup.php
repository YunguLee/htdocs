<?php
 
try{

    $pdo = new pdo('mysql:host=localhost;dbname=test1;charset=utf8','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
}
catch(Exception $e) {
    echo $e->getMessage();
    return false;
}


$id = $_POST['id'];
$passwd = $_POST['passwd'];
$name = $_POST['name'];
$phone = $_POST['phone1'];

$phone = $phone."-".$_POST['phone2']."-".$_POST['phone3'];


$sql='INSERT INTO member (id,passwd,name,phone) VALUES (:id,:passwd,:name,:phone)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->bindValue(':passwd', $passwd);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':phone', $phone);
$stmt->execute();


$pdo = null;
?>