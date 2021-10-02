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




$fname = $_POST['fn'];
$uno = $_POST['un'];
$pass = $_POST['pwd'];
$dobb = $_POST['dob'];
$mobile = $_POST['mob'];









$sql = "INSERT INTO p_detail (username, password, name,dob,mob)
VALUES ('$uno', '$pass','$fname','$dobb','$mobile')";

if ($conn->query($sql) === TRUE) {
  echo '<script type ="text/JavaScript">';  
echo 'alert("Data successfully added")';  
echo '</script>'; 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ADD.HTML");
exit();
?>
