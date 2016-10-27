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


$sql='select * from member';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); 

?>
    
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>password</th>
            <th>name</th>
            <th>phone</th>
        </tr>
    </thead>
    
    <tbody>
        
       <?php 
        foreach($result as $row)
        { 
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['passwd']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "</tr>";
        } 
        ?>
    </tbody>
</table>
    
