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
<?php session_start();
if(!isset($_SESSION['Login'])) // If session is not set then redirect to Login Page
{
    header("Location:login.php");  
}
$video = urldecode($_GET['query']);
$video = base64_decode($video);
$id = urldecode($_GET['id']);
$id = base64_decode($id);
$videoid = urldecode($_GET['vid']);
$videoid = base64_decode($videoid);
$conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
$sql = "SELECT * FROM tbl_market WHERE userid = '$id' and videoid = '$videoid'";
$result = mysqli_query($conn,$sql);
if (mysqli_fetch_array($result) == 0)
{
  console.log($videoid);
  console.log($id);
  echo '<script language="javascript">';
  echo 'alert("You do not have permision to view this file!")';
  echo '</script>';
  echo '<script language="javascript">';
  echo 'window.location.href = "market.php"';
  echo '</script>';
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
