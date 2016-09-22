<?php
try{
$pdo=new PDO('mysql:host=127.0.0.1;dbname=kcc;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    print 'Connect is Success';
    $pdo=null;}
catch(PDOException $Exception){
   die('Connect Fail:'.$Exception->getMessage()); 
    
}
?>