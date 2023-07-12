<?php 
session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: login.php");
} else {
    echo "Login Success<br>";
    echo "Welcome, " . $_SESSION['Login'];

echo "<br><a href='logout.php'>Logout</a><br> ";
}
?>
<?php
$n=5;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
 
echo getName($n);
?>