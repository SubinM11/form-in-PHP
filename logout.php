<?php
session_start();
session_unset();
header("Location:loginform.php");
exit();

?>