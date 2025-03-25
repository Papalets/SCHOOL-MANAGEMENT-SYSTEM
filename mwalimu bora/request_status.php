<?php
session_start();

// Include the connection.php file to establish a connection to the database
include 'connection.php';

// Retrieve the request ID from the session variable
$id = isset($_SESSION['request_id']) ? $conn->real_escape_string(htmlspecialchars($_SESSION['request_id'])) : '';

// Check if the request ID is valid
if (!empty($id)) {
    // Retrieve the status of the request and display a message based on the status
    $sql = "SELECT status FROM teacher_request WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $status = $row['status'];

        if ($status == '1') {
            echo "Your request has been approved.";
        }
        elseif ($status == '2') {
            echo "Your request has been denied.";
        }
        else {
            echo "Your request is currently pending.";
        }
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();

    // Remove the request ID from the session variable
    unset($_SESSION['id']);
}
else {
    echo "Error: Invalid request ID.";
}
?>