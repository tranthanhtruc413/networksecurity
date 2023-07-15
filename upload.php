<!DOCTYPE html>
<html>
<head>
    <title>Videos Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: login.php");
}
if(isset($_POST['back'])){
    header("Location: option.php");

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
    <h1>Videos Upload Page</h1>
    <form class="form" method="post" action="" enctype="multipart/form-data">
        <label>Video name:</label>
        <input type="text" name="videoname"> <br/>
        <label>Video description:</label>
        <input type="text" name="description"> <br/>
        <div style="margin-left: 9%">
            <label>File:</label>
            <input type="file" name="file"> <br/>
        </div>
        <button type="submit" name="back" class="btn"><i class="fa fa-upload fw-fa"></i>Go Back</button>
        <button type="submit" name="upload" class="btn" id="upload"><i class="fa fa-upload fw-fa"></i> Upload to the Market</button>
        <button type="submit" name="download" class="btn"><i class="fa fa-download fw-fa" ></i>Download</button>
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
            <td>Date Uploaded</td>
        </tr>
        </thead>
        <tbody>
        <?php
            $conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
            if (mysqli_connect_errno()) {
                echo "Unable to connect to MySQL! " . mysqli_connect_error();
            }
            $id = 1;
            $sql = "SELECT videoid,videoname,DATE_FORMAT(dateupload, '%H:%i:%s %e/%m/%Y') as dateupload FROM tbl_videos where userid = '".$_SESSION['Login']."'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>'.$id.'</td>';
                echo '<td>' . $row['videoid'] . '</td>';
                echo '<td>' . $row['videoname'] . '</td>';
                echo '<td>' . $row['dateupload'] . '</td>';
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
function logisticMap($x, $r) {
    return $r * $x * (1 - $x);
}

function generateKey($length, $seed, $r) {
    $key = [];
    $x = $seed;

    for ($i = 0; $i < $length; $i++) {
        $x = logisticMap($x, $r);
        $key[] = $x;
    }

    return $key;
}

function encryptFileChunk($inputFile, $outputFile, $key) {
    $input = fopen($inputFile, 'rb');
    $output = fopen($outputFile, 'wb');

    while (!feof($input)) {
        $data = fread($input, 8192);
        $encryptedData = '';

        for ($i = 0; $i < strlen($data); $i++) {
            $encryptedData .= chr(ord($data[$i]) ^ intval($key[$i % count($key)] * 255));
        }

        fwrite($output, $encryptedData);
    }

    fclose($input);
    fclose($output);
}

function rand_float($st_num=0,$end_num=1,$mul=1000000)
{
    if ($st_num>$end_num) return false;
    return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
}

if(isset($_POST["upload"]))
{
            $conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
             function getName($n) {
                 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                 $randomString = '';
              
                 for ($i = 0; $i < $n; $i++) {
                     $index = rand(0, strlen($characters) - 1);
                     $randomString .= $characters[$index];
                 }
              
                 return $randomString;
             }
             $n=5;
                 $videoid = getName($n);
                 while (true) 
                 {
                     $sql = "SELECT * FROM tbl_videos WHERE videoid='$videoid'";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) 
                     {
                         $videoid = getName($n);
                     }
                     else
                     {
                         break;
                     }
                 }
        if (($_FILES['file']['name']!="")){
                $videoname = $_POST['videoname'];
                $description = $_POST['description'];
                $userid = $_SESSION['Login'];
                $check = $_FILES['file']['name'];
                $sqlcheck = "SELECT location FROM tbl_videos WHERE location='$check'";
                $namecheck = "SELECT videoname FROM tbl_videos WHERE videoname='$videoname'";
                $resultcheck = $conn->query($sqlcheck);
                $namespace = $conn->query($namecheck);
                if ($resultcheck->num_rows > 0) 
                {
                    echo '<script language="javascript">';
                    echo 'alert("File already exists")';
                    echo '</script>';
                    exit();
                }
                else if ($namespace->num_rows > 0) 
                {
                    echo '<script language="javascript">';
                    echo 'alert("Video name already exists")';
                    echo '</script>';
                    exit();
                }
                else
                {
                    $keyLength = 256;  // Key length in bytes
                    $seed =0.1; // Initial seed value
                    $r = 3.0;  // Chaotic map parameter      
                    $key = generateKey($keyLength, $seed, $r);
                    $info = pathinfo($_FILES['file']['name']);
                    $ext = $info['extension']; // get the extension of the file
                    $inputFile = $_FILES['file']['tmp_name'];
                    $outputFile = 'marketUI/video/encryptedvideo/'.$videoid.'.'.$ext;
                // Check if file already exists
                    encryptFileChunk($inputFile, $outputFile, $key);
                    echo '<p>File encrypted successfully!</p>';
                    $keystring = implode($key);
                // Using echo statement
                    echo "Generated Key: " . $keystring;
                    move_uploaded_file($_FILES['file']['name'],$outputFile);
                     $sql = "INSERT INTO tbl_videos (videoid, videoname, description, userid,location) VALUES ('$videoid', '$videoname', '$description', '$userid','$check')";
                     if ($conn->query($sql) === TRUE) 
                     {
                        echo "Congratulations! File Uploaded Successfully.";
                     } 
                     else 
                     {
                         echo "Error: " . $sql . "<br>" . $conn->error;
                     }
                }
               
            }
}

?>