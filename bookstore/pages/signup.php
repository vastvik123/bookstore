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

$sql="INSERT INTO users (email,password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
	session_start();
	$_SESSION['email'] = $user;
    header("Location:home.php");
    die();
} else {
    echo("An account with this email address already exist!");
}

$conn->close();
?>