<?php


include("cofig.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobileno=$_POST['mobileno'];
  
    $result=mysqli_query($mysqli,"insert into form value('','$name','$email','$password','$mobileno')");

if($result){
    echo "user Registered succesfull.....";
}
else{
    echo "somthing wrong....";
}
}

?>