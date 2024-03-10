<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the message is set and not empty
    if (isset($_POST["message"]) && !empty($_POST["message"])) {
        // Sanitize and store the message
        $message = htmlspecialchars($_POST["message"]);

        // You can perform additional processing here, such as saving the message to a database or sending an email

        // Respond with a success message
        $response = array("success" => true, "message" => "Message received successfully!");
        echo json_encode($response);
    } else {
        // Respond with an error message if the message is empty
        $response = array("success" => false, "message" => "Message is empty!");
        echo json_encode($response);
    }
} else {
    // Respond with an error if the request method is not POST
    $response = array("success" => false, "message" => "Invalid request method!");
    echo json_encode($response);
}
?>
