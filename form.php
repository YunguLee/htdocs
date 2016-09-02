<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Sending Test</title>
</head>
<body>
   <form name="form1" method="post" action="view.php">
        name:
        <input type="text" name="onname"><br>
        본문:
       <textarea name="bonmun" cols="30" rows="5"></textarea><br>
       
        My hobby:<br>
        
        <input type="checkbox" name="hobby[]" value="sports"><br>
        sports:
        <input type="checkbox" name="hobby[]" value="Moive"><br>
        Movie:
        <input type="checkbox" name="hobby[]" value="Book"><br>
        book:<br>
        <input type="submit" value="sending"><br>
    </form>
</body>
</html>