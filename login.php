<?php
include("cofig.php");
session_start() ;

if(isset($_POST['name']) && isset($_POST['password'])) {
    

    $name=$_POST['name'];
    $password=$_POST['password'];

    if(empty($name)){
        header("location:loginform.php?error=User name is required..");
        exit();

    }elseif(empty($password)){
        header("Location:loginform.php?error=password is required..");
        exit();
    }else{
         $sql="SELECT * from form WHERE name='$name' AND password='$password'";
         $result=mysqli_query($mysqli,$sql);

         if(mysqli_num_rows($result)){
            $row=mysqli_fetch_assoc($result);
            if(($row['name']===$name && $row['password']===$password)){
                $_SESSION['name']=$row['name'];
                $_SESSION['id']=$row['id'];
                header("location:home.php");
                exit();
            }
         }
         else{
            header("location:loginform.php?error=Please correct user details...");
            exit(); 
         }
    }

    


}
?>