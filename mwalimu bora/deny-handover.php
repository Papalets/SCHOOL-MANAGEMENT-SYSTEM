<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "UPDATE teacher_request SET status = 2 WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Handover request denied";
    header("Refresh: 3");
} else {
    echo "Error updating handover request: " . $conn->error;
    header("Refresh: 3");
}

$conn->close();
?>