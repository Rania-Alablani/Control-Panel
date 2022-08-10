<?php

$conn = mysqli_connect('localhost', 'root', '', 'smartrania');
if (!$conn) {
    echo " Error : " , mysqli_connect_error();
}
else if (isset($_GET['forward'])) {
    echo "<h1>forward</h1>";
    $sql = "INSERT INTO raniaDirection(direction)VALUES('forward')";
    mysqli_query($conn, $sql);
} if (isset($_GET['backward'])) {
    echo "<h1>backward</h1>";
    $sql = "INSERT INTO raniaDirection(direction)VALUES('backward')";
    mysqli_query($conn, $sql);
}  if (isset($_GET['left'])) {
    echo "<h1>left</h1>";
    $sql = "INSERT INTO raniaDirection(direction)VALUES('left')";
    mysqli_query($conn, $sql);
} if (isset($_GET['right'])) {
    echo "<h1>right</h1>";
    $sql = "INSERT INTO raniaDirection(direction)VALUES('right')";
    mysqli_query($conn, $sql);
} if (isset($_GET['stop'])) {
    echo "<h1>stop</h1>";
$sql = "INSERT INTO raniaDirection(direction)VALUES('stop')";
  mysqli_query($conn, $sql);
}
  ?>

  <!DOCTYPE html>
  <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dir result</title>
<style>
  body{
  	font-size: 18px;
  	margin: 0;
    background: rgb(33,50,122);
    background: radial-gradient(circle, rgba(33,50,122,1) 0%, rgba(23,23,108,1) 36%, rgba(15,22,62,1) 80%);
  	color: #000;
  	display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
  }
  .Back{
  	width: 140px;
  	padding: 9px 22px;
    background: #fff;
  	border: 2px solid #8a334e;
  	color: #8a334e;
  	font-size: 18px;
  	cursor: pointer;
  	border-radius: 10px;
    align-items: center;
    justify-content: center;
    }
    .Back:hover {
      background-color:#8a334e;
      border: 2px solid #fff;
      color: #fff;
    }
    h1 {
    width: 140px;
    padding: 9px 22px;
    font-size: 40px;
    color: white;
    align-items: center;
    justify-content: center;
    height: 50vh;
    margin: 0;
    }
  </style>
</head>
  <body>
      <form action="index.php" method="get">
          <br>  <br>   <br>  <br>   <br>  <br>   <br>  <br>  <br>  <br>
          <button class= "Back" name="Back" id="Back">Back</button>
</br></br>
      </form>
  </body>

  </html>
