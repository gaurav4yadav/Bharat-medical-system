<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link rel="stylesheet" type="text/css" href="add.css"> 
       <link rel="php" type="text/php" href="addp.php">

 
    <nav  style="padding :55px; background:linear-gradient(to right,rgb(0, 0, 0), rgb(8, 247, 255))">
        <h style="font-size: 50px ; color:white;">Bharat Medical System</h>
        <p style="color: white;">Swasth Bharat Ayushmaan Bharat </p>

        <p style="float: right; color: azure;"><marquee>Initiative by power coders</marquee></p>

    </nav>


    
    
</head>
<body>
    <br> 
    <h2>Doctor Panel</h2>

    <form method="post" >
    <label >Patient Id :</label>
    <input type="text" name="postid" style="padding: 10px;">
    <br>
    
    <br>

    <label >Disease :</label>
    <input type="text" name="postd"  style="padding: 10px;">
    <br>

    
    <br>

    <label > Doctor Id :</label>
    <input type="text" name="postdid"  style="padding: 10px;">
    <br>

    <br>

    <label >Medcicine:</label>
    <input type="text" name="postmed"  style="padding: 10px;">
    <br>

    <br>

    <label >Surgery :</label>
    <input type="text" name="postsur"  style="padding: 10px;">
    <br>



<center><BUTTON type="submit" method="post" style="padding: 10px;width:10% ;background-color: greenyellow;color: black;">Save</BUTTON></center>
</form>
<?php

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "bms";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$poid = $_POST['postid'];
$pod = $_POST['postd'];
$podid = $_POST['postdid'];
$pomed = $_POST['postmed'];
$posur = $_POST['postsur'];

$date = date('Y-m-d');

$sql = "INSERT INTO p_disease (puid, disease, dpuid,date,medicine,surgery)
VALUES ('$poid', '$pod','$podid','$date','$pomed','$posur')";

echo "$date";

if ($conn->query($sql) === TRUE) {
  echo '<script type ="text/JavaScript">';  
echo 'alert("Data successfully added")';  
echo '</script>'; 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
// header("Location: ADD.HTML");
// exit();
?>




</body>
</html>