<?php
session_start();

// Check if the user is logged in
if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
    // Include your database connection file
    require('db.php');

    // Retrieve user information based on the firstname and lastname stored in the session
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];

    // Query to retrieve user data
    $query = "SELECT * FROM users WHERE firstname='$firstname' AND lastname='$lastname'";
    $result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) > 0) {
        // User found, retrieve user data
        $userData = mysqli_fetch_assoc($result);

        // Return user data as JSON
        echo json_encode($userData);
    } else {
        // User not found or error in fetching data
        echo json_encode(array('error' => 'User not found'));
    }
} else {
    // User is not logged in
    echo json_encode(array('error' => 'User not authenticated'));
}
?>
