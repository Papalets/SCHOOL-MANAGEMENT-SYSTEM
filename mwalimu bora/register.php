<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

// servername => localhost
// username => root
// password => empty
// database name => walimu and co.
$conn = mysqli_connect("localhost", "root", "", "walimu and co.");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Taking all 4 values from the form data(input)
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$department = mysqli_real_escape_string($conn, $_POST['department']);
$date = mysqli_real_escape_string($conn, $_POST['date']);

// encrypt password
$hash = password_hash($password, PASSWORD_DEFAULT);

// Check if username already exists
$sql = "SELECT COUNT(*) as count FROM enrollment WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $count);
mysqli_stmt_fetch($stmt);

if ($count > 0) {
    // Username already exists
    echo "<script>
    setTimeout(function() {
        window.alert('Username already exists!!');
        window.location.href = 'ENROLLMENT.php';
    }, 1000); // Delay the redirection by 1 second
</script>";

} else {
    // Check if email already exists
    $sql = "SELECT COUNT(*) as count FROM enrollment WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);



    if ($count > 0) {
        // Email already exists
        echo "<script>
        setTimeout(function() {
            window.alert('Email already exists!!');
            window.location.href = 'ENROLLMENT.php';
        }, 1000); // Delay the redirection by 1 second
</script>";

    } else {
        // Prepare the SQL statement
        $stmt = mysqli_prepare($conn, "INSERT INTO enrollment (username, email, password, department, date) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $hash, $department, $date);

// Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>
            setTimeout(function() {
                window.alert('NEW USER REGISTERED!!');
                window.location.href = 'ENROLLMENT.php';
            }, 1000); // Delay the redirection by 1 second
</script>";
        } else {
            echo "<script>
            setTimeout(function() {
                window.alert('NEW USER NOT REGISTERED!!');
                window.location.href = 'ENROLLMENT.php';
            }, 1000); // Delay the redirection by 1 second
</script>";
        }

        // Close the prepared statement and the connection
        mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);
?>