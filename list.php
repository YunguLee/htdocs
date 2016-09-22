<?php 
    $search="%".$_POST['search']."%";
    include 'kccdb.php';
    $sql="select * from member where last_name like :last_name or first_name like :first-name";
    $stmh=$pdo -> prepare($sql);
    $stmh->bindvalue(':last_name', $search, PDO::PARAM_STR);
    $stmh->bindvalue(':first_name', $search, PDO::PARAM_STR);
    $stmh->excute();
    $count=$stmch->rowcount();
    print $count."건입니다.";
?>