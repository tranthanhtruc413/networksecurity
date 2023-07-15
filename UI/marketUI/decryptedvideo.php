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

<body>
    <ul>
        <li><a href="./market.php">Back</a></li>
        <li><a href="../option.php">Home</a></li>
        <li style="float:right"><a class="active" href="#about">About</a></li>
    </ul>
    <div class="video-container" style =" transform: translate(-50%, -50%);position: absolute;top: 50%;left: 50%;display: flex;justify-content: center;">
        <video id="video-player" controls>
            <source src="video/decryptedvideo/video.mp4" type="video/mp4">
        </video>
    </div>
</body>
</html>
