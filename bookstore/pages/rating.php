<?php session_start(); ?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$rating = $_POST["rating"];
$book = $_POST["book_id"];
$user = $_SESSION["email"];

$sql="SELECT * from ratings where email='$user' and book_id='$book'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$sql1="UPDATE ratings set rating='$rating' where email='$user' and book_id='$book'";
	$result1 = $conn->query($sql1);
}

else {
    $sql1="INSERT INTO ratings VALUES ('$book', '$user', $rating)";
    $result1 = $conn->query($sql1);
}
header("Location: browse.php");
die();

$conn->close();

?>