<?php
session_start();
?>
<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form name="confirm1"mehtod="post" action="confirmview.php">
       <?php
            print "name: ";
            print $_SESSION["name"]."<br>";
            print "level: ";
            print $_SESSION["level"];
        ?>
    </form>
</body>
</html>