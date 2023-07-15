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
            <td>Video ID</td>
            <td>Video Name</td>
            <td>Date Uploaded</td>
        </tr>
        </thead>
        <tbody>
        <?php

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
        $videoname = $_POST['videoname'];
        $description = $_POST['description'];
        $userid = $_SESSION['Login'];
        $sql = "INSERT INTO tbl_videos (videoid, videoname, description, userid) VALUES ('$videoid', '$videoname', '$description', '$userid')";
        if ($conn->query($sql) === TRUE) 
        {
            echo "New record created successfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
?>