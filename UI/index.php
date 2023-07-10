<?php 
session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: login.php");
} else {
    echo "Login Success<br>";
    echo "Welcome, " . $_SESSION['Login'];

echo "<br><a href='logout.php'>Logout</a> ";
}
?>