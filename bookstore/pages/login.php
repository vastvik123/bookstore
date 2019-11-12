<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
$user= $_POST["email"];
$pass= $_POST["password"];

$sql="SELECT * from users WHERE email='$user' AND password='$pass'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	session_start();
	$_SESSION['email'] = $user;
    header("Location:home.php");
    die();
} else {
    echo("Account with this email doesn't exist!");
}

$conn->close();
?>