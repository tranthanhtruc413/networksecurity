<!DOCTYPE html>
<html>
<head>
    <title>Market</title>
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
   header("Location: market.php");
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
    <h1>Market</h1>
    <form class="form" method="post" action="" enctype="multipart/form-data">
        <label>Video name to buy:</label>
        <input type="text" name="videoname"> <br/>
        <button type="submit" name="back" class="btn"><i class="fa fa-upload fw-fa"></i>Go Back</button>
        <button type="submit" name="store" class="btn"><i class="fa fa-upload fw-fa"></i>Dashboard</button>
        <button type="submit" name="buy" class="btn"><i class="fa fa-download fw-fa" ></i>Buy</button>
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
        </tr>
        </thead>
        <tbody>
        <?php
            $conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
            if (mysqli_connect_errno()) {
                echo "Unable to connect to MySQL! " . mysqli_connect_error();
            }
            $id = 1;
            $userid = $_SESSION['Login'];
            $sql = "SELECT * FROM tbl_videos where videoid not in (select videoid from tbl_market where userid = '$userid')";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>'.$id.'</td>';
                echo '<td>' . $row['videoid'] . '</td>';
                echo '<td>' . $row['videoname'] . '</td>';
                echo '<td>' . $row['userid'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
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
if(isset($_POST["buy"]))
{
    $conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
    if (mysqli_connect_errno()) {
        echo "Unable to connect to MySQL! " . mysqli_connect_error();
    }
    $videoname = $_POST['videoname'];
    $sql1 = "SELECT videoid FROM tbl_videos where videoname = '$videoname'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $videoid = $row1['videoid'];
    $userid = $_SESSION['Login'];
    $sql = "INSERT INTO tbl_market (videoid,userid) VALUES ('$videoid','$userid')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Buy successfully!')</script>";
        echo "<script>window.location.href='market.php'</script>";
    } else {
        echo "<script>alert('Buy failed!')</script>";
    }
}
?>