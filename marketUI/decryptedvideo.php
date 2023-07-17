<!DOCTYPE html>
<html>
<head>
    <title>Video Player</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
<?php 
// Hyperchaotic map function
function chuaMap($x, $y, $z, $a, $b, $c, $d) {
  $x_dot = $a * ($y - $x - $b * $x * $x - $c * $x * $y - $d * $x * $z);
  $y_dot = $x * (1 - $c * $x - $d * $x * $x - $y);
  $z_dot = $x * ($y - $z);
  return array($x_dot, $y_dot, $z_dot);
}

// Generate the key
function generateKey($length) {
  $key = "";
  $x0 = 0.1;
  $y0 = 0.2;
  $z0 = 0.3;
  $a = 15.6;
  $b = 1;
  $c = 28;
  $d = 0.05;

  for ($i = 0; $i < $length; $i++) {
      list($x0, $y0, $z0) = chuaMap($x0, $y0, $z0, $a, $b, $c, $d);
      $key .= chr(floor(($x0 + $y0 + $z0) * 255) % 256);
  }

  return $key;
}

// Encrypt file
function encryptFile($inputFile, $outputFile, $key) {
  $input = fopen($inputFile, 'rb');
  $output = fopen($outputFile, 'wb');
  $keyLength = strlen($key);

  while (!feof($input)) {
      $plaintext = fread($input, 8192);
      $ciphertext = '';

      $plaintextLength = strlen($plaintext);
      for ($i = 0; $i < $plaintextLength; $i++) {
          $ciphertext .= chr((ord($plaintext[$i]) + ord($key[$i % $keyLength])) % 256);
      }

      fwrite($output, $ciphertext);
  }

  fclose($input);
  fclose($output);
}

// Decrypt file
function decryptFile($inputFile, $outputFile, $key) {
  $input = fopen($inputFile, 'rb');
  $output = fopen($outputFile, 'wb');
  $keyLength = strlen($key);

  while (!feof($input)) {
      $ciphertext = fread($input, 8192);
      $plaintext = '';

      $ciphertextLength = strlen($ciphertext);
      for ($i = 0; $i < $ciphertextLength; $i++) {
          $plaintext .= chr((ord($ciphertext[$i]) - ord($key[$i % $keyLength]) + 256) % 256);
      }

      fwrite($output, $plaintext);
  }

  fclose($input);
  fclose($output);
}
session_start();
if(!isset($_SESSION['Login'])) // If session is not set then redirect to Login Page
{
    header("Location:../login.php");  
}
$video = urldecode($_GET['query']);
$video = base64_decode($video);
$id = $_SESSION['Login'];
$videoid = urldecode($_GET['vid']);
$videoid = base64_decode($videoid);
$conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
$sql = "SELECT * FROM tbl_market WHERE userid = '$id' and videoid = '$videoid'";
$result = mysqli_query($conn,$sql);
if (mysqli_fetch_array($result) == 0)
{
  unlink("video/decryptedvideo/$video"); 
  echo '<script language="javascript">';
  echo 'alert("You do not have permision to view this file!")';
  echo '</script>';
  echo '<script language="javascript">';
  echo 'window.location.href = "market.php"';
  echo '</script>';
}
$sqlcheck = "SELECT * FROM tbl_keys WHERE videoid='$videoid'";
   $resultcheck = $conn->query($sqlcheck);
   if ($resultcheck->num_rows > 0) 
   {
       while($row = $resultcheck->fetch_assoc()) 
       {
           $keyapi = $row['ckey'];
           $userid = $row['userid'];
       }
       $sql = "SELECT location FROM tbl_videos WHERE videoid='$videoid'";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();
       $location = $row['location'];
       $info = pathinfo($location);
       $ext = $info['extension']; // get the extension of the file
       $inputFile = 'video/encryptedvideo/'.$videoid.'.'.$ext;
       $outputFile = 'video/decryptedvideo/'.$videoid.'.'.$ext;
       $keyapi = base64_decode($keyapi);
       $cipher = "aes-128-gcm";
       $tag_length = 16;
       $iv_len = openssl_cipher_iv_length($cipher);
       $iv = substr($keyapi, 0, $iv_len);
       $ciphertext = substr($keyapi, $iv_len, -$tag_length);
       $tag = substr($keyapi, -$tag_length);
       $aeskey =bin2hex($userid);
       $key = openssl_decrypt($ciphertext, $cipher, $aeskey, OPENSSL_RAW_DATA, $iv, $tag, $tag_length);
       decryptFile($inputFile, $outputFile, $key);
      }

?>
<body>
    <ul>
        <li><a href="./market.php">Back</a></li>
        <li><a href="../option.php">Home</a></li>
        <li style="float:right"><a class="active" href="#about">About</a></li>
    </ul>
    <div class="video-container" style =" transform: translate(-50%, -50%);position: absolute;top: 50%;left: 50%;display: flex;justify-content: center;">
        <video id="video-player" controls>
            <source src="video/decryptedvideo/<?php echo $video ?>" type="video/mp4">
        </video>
    </div>
</body>
</html>
