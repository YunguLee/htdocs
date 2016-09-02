<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    print $_POST["onname"]."Welcome"."<br>";  
    print nl2br($_POST["bonmun"]);
    if(isset($_POST["hobby"])){
        $hobby=implode('and'. $_POST["hobby"]);
        print "my hobby is ".$hobby."pp";
    }else{
        print "i have no hobby";
    }
    ?>
</body>
</html>