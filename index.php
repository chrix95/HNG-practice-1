<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "hngtest";

// Create connection
$conn = new PDO("mysql:dbname=$database; host=$host", $user, $password);



// Check connection
if ($conn == TRUE) {
    echo "Connected";
} else {
    echo "Not connected";
}

$query = $conn->prepare("SELECT * FROM test ORDER BY id DESC");//SQL query to select all record from Database
$result = $query->execute();

if ($query == TRUE) {
    echo "Success";
} else {
    echo "Not successful";
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotels.ng Test</title>
</head>
<body>

<h3>Hotels.ng Demo</h3>
<div style="">

<?php if($result->rowCount() > 0): ?>

<?php while ($row = $query->fetch(PDO::FETCH_ASSOC)): ?>

	<b>Hotel Name:</b> <i><?php echo $row['hotel_name']; ?></i></br>
	<b>Hotel Description:</b> <i><?php echo $row['description']; ?></i></br>
	<b>Hotel Location:</b> <i><?php echo $row['location']; ?></i></p>

<?php endwhile; ?>

<?php elseif ($result->rowCount() == 0): ?>
	<i><?php echo $row['hotel_name']; ?></i>



<?php endif; ?>
	
</div>



</body>
</html>
