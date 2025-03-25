<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "UPDATE teacher_request SET status = 1 WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Handover request approved";
    echo "<script>setTimeout(function() { window.location.reload(); }, 3000);</script>";
} else {
    echo "Error updating handover request: " . $conn->error;
    echo "<script>setTimeout(function() { window.location.reload(); }, 3000);</script>";
}

$conn->close();
?>