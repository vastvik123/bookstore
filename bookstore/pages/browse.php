<?php session_start(); ?>
<?php include("../includes/header.php");?>
<?php include("../includes/searchbar.php");?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$sql="SELECT * from books";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	
    	$image = $row['image'];
    	$price = $row['price'];
    	$book_id = $row['book_id'];
    	
    	
    	$sql1 = "SELECT AVG(rating) AS average from ratings where book_id=$book_id";
    	$result1 = $conn->query($sql1);
    	$avg = mysqli_fetch_assoc($result1);
    	$ans = $avg['average'];

    	echo "<img src='../images/$image'><br>";
    	echo "<p style='margin-left:60%; color:darkblue; font-size:20px'>Average rating is: $ans</p><br>";
    	echo "<p style='color:darkblue'>Give your rating!</p>";
    	echo"<form action='rating.php' method='post'><input name='rating' type='text'> <input type='hidden' name='book_id' value='$book_id'><br>
    	<input type='submit'></form><hr>";
    	
    	
    }
       
} else {
    echo("No books uploaded");
}
$conn->close();
?>