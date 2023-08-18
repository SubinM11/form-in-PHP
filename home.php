<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])){

}else{
    header("location:loginform.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Welcome My Page</h1>
    <center><h3>Hii.. <?php echo $_SESSION['name'] ?></h3></center>

    <div style="text-align: right" ><a href="logout.php">logout </a></div>
</body> 
</html>