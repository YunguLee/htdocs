<?php
   
    $ko_name = $_POST["ko_name"];
    $en_name = $_POST["eg_name"];
    $biryear = $_POST["biryear"]."-".$_POST["biryear2"]."-".$_POST["biryear3"];
    $userid = $_POST["user_id"];
    $pw = $_POST["passwd"];
    $pw_ch = $_POST["passwd_ch"];
    $e_mail = $_POST["e_mail"];

    $phone = $_POST["phone"];
    switch($_POST["phone"])
    {
        case 1: $phone = "02"; break;
        case 2: $phone = "031"; break;
        case 3: $phone = "032"; break;
        case 4: $phone = "033"; break;
    }
    $phone = $phone."-".$_POST["phone2"]."-".$_POST["phone3"];
  
    $o_phone = $_POST["o_phone"];
    switch($_POST["o_phone"])
    {
        case 1: $o_phone = "010"; break;
        case 2: $o_phone = "011"; break;
        case 3: $o_phonee = "016"; break;
        case 4: $o_phone = "017"; break;
        case 5: $o_phone = "018"; break;
        case 6: $o_phone = "019"; break;
    }
    $o_phone = $o_phone."-".$_POST["o_phone2"]."-".$_POST["o_phone3"];

    $agreement = $_POST["agreement"];
    $homenumber = $_POST["homenumber1"]."-".$_POST["homenumber2"];
    $homeadd = $_POST["homeadd1"]."-".$_POST["homeadd2"];
    $dmsend = $_POST["dmsend"];
    $work = $_POST["work"];
    $job_family = $_POST["job_family"];
    $position = $_POST["position"];
    $workhomenumber = $_POST["workhomenumber1"]."-".$_POST["workhomenumber2"];
    $workhomeadd = $_POST["workhomeadd1"]."-".$_POST["workhomeadd2"];
 
    $work_number = $_POST["work_number"];
    switch($_POST["work_number"])
    {
        case 1: $work_number = "010"; break;
        case 2: $work_number = "011"; break;
        case 3: $work_number = "016"; break;
        case 4: $work_number = "017"; break;
        case 5: $work_number = "018"; break;
        case 6: $work_number = "019"; break;
    }
    $work_number = $work_number."-".$_POST["work_number2"]."-".$_POST["work_number3"];


    $fax_number = $_POST["fax_number"];
    switch($_POST["fax_number"])
    {
        case 1: $fax_number = "010"; break;
        case 2: $fax_number = "011"; break;
        case 3: $fax_number = "016"; break;
        case 4: $fax_number = "017"; break;
    }
    $fax_number = $fax_number."-".$_POST["fax_number2"]."-".$_POST["fax_number3"];
    $marry = $_POST["marry"];
    $maryear = $_POST["maryear"]."-".$_POST["maryear2"]."-".$_POST["maryear3"];

 
     try{
    // MySQL PDO 객체 생성
    // mysql을 다른 DB로 변경하면 다른 DB도 사용 가능
        $pdo = new pdo('mysql:host=localhost;dbname=userim;charset=utf8','root',''); 
    // 에러 출력
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        print "접속";
    }
    catch(Exception $e) {
        echo $e->getMessage();
        return false;
    }

  

    $sql='INSERT INTO userimp (ko_name,en_name,biryear,userid,pw,phone,o_phone,agreement,e_mail,homenumber,homeadd,dmsend,work,job_family,position,
    workhomenumber,workhomeadd,work_number,fax_number,marry,maryear) VALUES (:ko_name,:en_name,:biryear,:userid,:pw,:phone,:o_phone,:agreement,:e_mail,:homenumber,:homeadd,:dmsend,:work,:job_family,:position,
    :workhomenumber,:workhomeadd,:work_number,:fax_number,:marry,:maryear)';

 
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':ko_name', $ko_name);
    $stmt->bindValue(':en_name', $en_name);
    $stmt->bindValue(':biryear', $biryear);
    $stmt->bindValue(':userid', $userid);
    $stmt->bindValue(':pw', $pw);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':o_phone', $o_phone);
    $stmt->bindValue(':agreement', $agreement);
    $stmt->bindValue(':e_mail', $e_mail);
    $stmt->bindValue(':homenumber', $homenumber);
    $stmt->bindValue(':homeadd', $homeadd);
    $stmt->bindValue(':dmsend', $dmsend);
    $stmt->bindValue(':work', $work);
    $stmt->bindValue(':job_family', $job_family);
    $stmt->bindValue(':position', $position);
    $stmt->bindValue(':workhomenumber', $workhomenumber);
    $stmt->bindValue(':workhomeadd', $workhomeadd);
    $stmt->bindValue(':work_number', $work_number);
    $stmt->bindValue(':fax_number', $fax_number);
    $stmt->bindValue(':marry', $marry);
    $stmt->bindValue(':maryear', $maryear);
    $stmt->execute();

?>