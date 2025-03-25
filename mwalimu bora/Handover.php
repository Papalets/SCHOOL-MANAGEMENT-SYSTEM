<?php
session_start();
include 'connection.php';


// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve form data
    $subject = $conn->real_escape_string(htmlspecialchars($_POST['subject']));
    $grade = $conn->real_escape_string(htmlspecialchars($_POST['grade']));
    $teacher_id = $conn->real_escape_string(htmlspecialchars($_POST['teacher_id']));
    $requesting_teacher = $conn->real_escape_string(htmlspecialchars($_POST['requesting_teacher']));
    $responsibility_teacher = $conn->real_escape_string(htmlspecialchars($_POST['responsibility_teacher']));
    $reason = $conn->real_escape_string(htmlspecialchars($_POST['reason']));

    // Insert data into teacher_request table
    $sql = "INSERT INTO teacher_request (subject, grade, teacher_id, requesting_teacher, responsibility_teacher, reason)
    VALUES ('$subject', '$grade', '$teacher_id', '$requesting_teacher', '$responsibility_teacher', '$reason')";

    if ($conn->query($sql) === TRUE) {
        // Store the request ID in the session variable
        $_SESSION['id'] = $conn->insert_id;
        echo "New request submitted successfully. You will now be redirected to the status page.";

        // Redirect to the status page
        header('Location: TEACHER.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
    exit;
}
?>