<?php
    /*phpinfo();
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Today is first php</title>
</head>
<body>
  <ul>
   <li>1</li>
   <li>2</li>
   <?php
        print "SSDD";
    ?>
   <li>3rd example
   <?php
        print PHP_VERSION."<br>";
        print PHP_OS."<br>";
        define("HELLO","HI");
        print HELLO."<br>";
        define("_18","신발");         

        print _18;
        print __DIR__;
       ?>
       </li>
   <li>4
   <?php
        $data="SD";
        $data1=1;
        print $data;
        print $data1;
       
        $week[]="Mon";
        $week[]="Tue";
            //같음
        $week[0]="Mon";
        $week[1]="Tue";
        print $week[0];
        print $week[1];
        //array 함수
       $Month=array(1,2,3,4,5,6,7,8,9,10,11,12,"Mon");
       //5.4이상부터 사용가능
       $year=[2016,2017];
       //배열초기화
       $month=array();
       //연관배열
       $member["name"]="GIC";
       $member["age"]=3;
       $member["height"]=135;
            print $member["age"];
            print_r ($member)."<br>";
    ?></li>
    </ul>
    
    
    <p style="background-color: gray">
    <?php
    for ($k = 1 ; $k <10 ; $k++) {
            for ($x = 1 ; $x <10 ; $x++){
            $j = $x * $k;
        echo "$k * $x = $j, ";
        }
    echo "<hr>";
       }
    ?>
</body>
</html>