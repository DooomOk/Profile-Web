<?php
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$dbname = "db"; // Change this to your actual database name

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the comment content from the POST request
$comment = $_POST['comment'];

// Escape special characters to prevent SQL injection
$comment = mysqli_real_escape_string($con, $comment);

// SQL query to insert the comment into the database
$sql = "INSERT INTO comments (comment) VALUES ('$comment')";

// Execute the query
if (mysqli_query($con, $sql)) {
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false, 'error' => mysqli_error($con)));
}

// Close the database connection
mysqli_close($con);
?>
