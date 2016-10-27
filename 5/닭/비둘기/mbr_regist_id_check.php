
 <?php

 if($mbrID) { 
  $pdo = new pdo('mysql:host=localhost;dbname=userim;charset=utf8','root',''); 
    // 에러 출력
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); 
     
    $sql = "SELECT COUNT(mbrID) FROM userimp WHERE userid='$mbrID'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  if(mysql_result($stmt, 0)) 
  { $ERRmsg = "<br>이미 등록된 아이디입니다."; } 
  else
  {}
} 
     
>