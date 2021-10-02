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
else
echo 'database connected';




$fname = $_POST['fnd'];
$uno = $_POST['und'];
$pass = $_POST['pwdd'];
$dobb = $_POST['dobd'];
$mobile = $_POST['mobd'];
$regdd=$_POST['regd'];









$sql = "INSERT INTO d_details (dusername, dpassword, dname,ddob,dmob,dregno)
VALUES ('$uno', '$pass','$fname','$dobb','$mobile',$regdd)";

if ($conn->query($sql) === TRUE) {
  echo '<script type ="text/JavaScript">';  
echo 'alert("Database successffuly added")';  
echo '</script>'; 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ADD.HTML");
exit();
?>
