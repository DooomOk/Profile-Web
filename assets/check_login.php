<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // User is logged in
    echo json_encode(array('isLoggedIn' => true));
} else {
    // User is not logged in
    echo json_encode(array('isLoggedIn' => false));
}
?>
