<?php session_start(); ?>
<?php
if($_SESSION['fullname']!="") {
  header('../html/gamehome.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(! isset($_SESSION['fullname'])) {
  header('../html/gamehome.php');
}
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT id,fullname,score from user where email = '$email' and password = '$password'";

$result = $conn->query($sql);
$_SESSION['fullname']="裡壩頭";

if ($result->num_rows > 0) {
  
    header('Location: ../html/gamehome.php');
} else {
    header('Location: ../database/registration.php');
}


$conn->close();
?>