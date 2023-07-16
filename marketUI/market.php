<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php session_start();
error_reporting(E_ALL);
if (!isset($_SESSION['Login'])) {
    header("Location: ../login.php");
}
if(isset($_POST['back'])){
    header("Location: ../option.php");

}
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../login.php");
}
if(isset($_POST['store'])){
   header("Location: marketplace.php");
}
?>
<style>
    .form {
        width: 100%;
        display: inline-block;
        position: inherit;
        padding: 6px;
    }

    .label {
        padding: 10px;
        width: 10%;
    }

    .input {
        position: inherit;
        padding: 3px;
        margin-left: 2.3%;
    }

    .btn {
        margin-left: 6.5%;
        background-color: blue;
        color: white;
    }
</style>
<center>
    <h1>Dashboard</h1>
    <form class="form" method="post" action="" enctype="multipart/form-data">
        <label>Video name:</label>
        <input type="text" name="videoname"> <br/>
        <button type="submit" name="back" class="btn"><i class="fa fa-upload fw-fa"></i>Go Back</button>
        <button type="submit" name="store" class="btn"><i class="fa fa-upload fw-fa"></i>Video Market</button>
        <button type="submit" name="download" class="btn"><i class="fa fa-download fw-fa" ></i>Watch</button>
        <button type="submit" name="logout" class="btn"><i class="fa fa-download fw-fa" ></i>Logout</button>
    </form>
</center>
<br>
<div class="container">
    <table id="demo" class="table table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Video ID</td>
            <td>Video Name</td>
            <td>Uploaded By</td>
            <td>Description</td>
            <td>Date Uploaded</td>
            <td>Date Bought</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
            if (mysqli_connect_errno()) {
                echo "Unable to connect to MySQL! " . mysqli_connect_error();
            }
            $id = 1;
            $sql = "SELECT tbl_videos.videoid,videoname,DATE_FORMAT(dateupload, '%H:%i:%s %e/%m/%Y') as dateupload,description,DATE_FORMAT(buyedtime, '%H:%i:%s %e/%m/%Y') as buyedtime FROM tbl_videos,tbl_market where tbl_videos.videoid = tbl_market.videoid and tbl_market.userid = '".$_SESSION['Login']."'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>'.$id.'</td>';
                echo '<td>' . $row['videoid'] . '</td>';
                echo '<td>' . $row['videoname'] . '</td>';
                echo '<td>' . $row['userid'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                echo '<td>' . $row['dateupload'] . '</td>';
                echo '<td>' . $row['buyedtime'] . '</td>';
                echo '</tr>';
                $id++;
                }
            mysqli_close($conn);
        ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script type="text/javascript">
</script>
</body>
</html>
<?php 
function aesencrypt($plaintext, $key)
{
    $cipher = 'aes-256-gcm';
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $tag = null;
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, OPENSSL_RAW_DATA, $iv, $tag);

    return $ciphertext;
}
function aesdecrypt($encryptedText, $key)
{
    $cipher = 'aes-256-gcm';
    $ivlen = 12; // IV length for AES-256-GCM is 12 bytes
    $c = $encryptedText;
    $iv = substr($c, 0, $ivlen);
    $tag = substr($c, $ivlen, 16);
    $ciphertext = substr($c, $ivlen + 16);
    $plaintext = openssl_decrypt($ciphertext, $cipher, $key, OPENSSL_RAW_DATA, $iv, $tag);

    return $plaintext;
}
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


if(isset($_POST["download"]))
{
   $conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
   $userid = $_SESSION['Login'];
   $videoname = $_POST['videoname'];
   $sqldown = "SELECT * FROM tbl_videos WHERE videoname='$videoname'";
   $resultdown = $conn->query($sqldown);
   if ($resultdown->num_rows > 0) 
   {
       while($row = $resultdown->fetch_assoc()) 
       {
           $videoid = $row['videoid'];
       }
   }
   else
   {
       echo '<script language="javascript">';
       echo 'alert("Video not found")';
       echo '</script>';
       exit();
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
       $key = generateKey(1000);
       decryptFile($inputFile, $outputFile, $key);
       $location = "".$videoid.'.'.$ext;
       header("Location: decryptedvideo.php?query=".urlencode(base64_encode($location))."&vid=".urlencode(base64_encode($videoid))."");
   }
   else
   {
       echo '<script language="javascript">';
       echo 'alert("Video not found")';
       echo '</script>';
       exit();
   }
   }
?>