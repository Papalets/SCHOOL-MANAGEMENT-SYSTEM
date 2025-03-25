<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $user_id = $_GET['id'];

    $conn = mysqli_connect("localhost", "root", "", "walimu and co.");

    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "DELETE FROM enrollment WHERE id=$user_id";
    if (mysqli_query($conn, $sql)) {
        echo '<script>
                  window.location.href = "display.php";
                  alert("User has been deleted successfully.")
              </script>';
    } else {
        echo '<script>
                  window.location.href = "display.php";
                  alert("User not deleted, please try again.")
              </script>';
    }

    mysqli_close($conn);
    exit;
} else {
    echo "Missing or invalid id.";
    exit;
}