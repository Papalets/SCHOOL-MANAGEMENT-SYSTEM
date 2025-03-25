<?php
session_start();

require('connection.php');

// Make sure the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the required fields are set and not empty
if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $username = filter_var(stripslashes(trim($_POST['username'])), FILTER_SANITIZE_STRING);
    $password = filter_var(stripslashes(trim($_POST['password'])), FILTER_SANITIZE_STRING);

    // Check user is exist in the database
    $query = "SELECT * FROM `enrollment` WHERE username='$username'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Passwords match, create a session variable to store the user's data
            $_SESSION['username'] = $user['username'];
            $_SESSION['department'] = $user['department'];

            // Redirect to the appropriate dashboard based on department
            switch ($_SESSION['department']) {
                case 'System-admin':
                    header('Location: system-admin.php');
                    break;
                case 'Management':
                    header('Location: MANAGEMENT.php');
                    break;
                case 'Teacher':
                    header('Location: TEACHER.php');
                    break;
                default:
                    header('Location: DASHBOARD.php');
            }
            exit;
        } else {
            echo '<script> window.alert("Login Failed. Username or password incorrect!!");
                window.location.href = "mwalimubora.php";
                </script>';
        }
    } else {
        echo '<script> window.alert("Login Failed. Username or password incorrect!!");
                window.location.href = "mwalimubora.php";
                </script>';
    }
} else {
    echo '<script> window.alert("Login Failed. Username or password incorrect!!");
                window.location.href = "mwalimubora.php";
                </script>';
}

mysqli_close($conn);
?>