<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post"><br><br>

   <h1>Login Form</h1><br>

User Name  :  <input type="text" name="name"><br><br>

Password :<input type="password" name="password"><br><br>

<?php if(isset($_GET['error'])){
    echo $_GET['error'];
   }
   ?>
<br>

<button type="submit">login</button>
</form> 
</body>
</html>