<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Getting User Input</title>
</head>
<body>

<form action="6-gettinguserinput.php" method="get">
    Name : <input type="text" name="username" > <br> <br>
    <input type="submit">
</form>

<!-- =============================action================= -->
<?php
// if(isset($_GET["username"])){
//     echo $_GET["username"];
// }
echo $_GET["username"]
?>

</body>
</html> 