<?php
 session_start();
if(!isset($_SESSION['Login'])) // If session is not set then redirect to Login Page
{
    header("Location:login.php"); 
}
?>
<?php
header("Location: option.php");
?>