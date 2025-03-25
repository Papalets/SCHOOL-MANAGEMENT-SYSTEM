<?php
// Retrieve user data based on id
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $conn = mysqli_connect("localhost", "root", "", "walimu and co.");

    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM enrollment WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "No user found with this id.";
        exit;
    }

    mysqli_close($conn);
} else {
    echo "Missing or invalid id.";
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $date = $_POST['date'];

    $conn = mysqli_connect("localhost", "root", "", "walimu and co.");

    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE enrollment SET username='$username', email='$email', password='$password_hash', department='$department', date='$date' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo '<script>
                  window.location.href = "display.php";
                  alert("User has been updated successfully.")
              </script>';
    } else {
        echo '<script>
                  window.location.href = "edit.php?id=' . $id . '";
                  alert("User not updated, please try again.")
              </script>';
    }

    mysqli_close($conn);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <style>
        label {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>Edit User</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

    <label>
        Username:
        <input type="text" name="username" value="<?php echo isset($user['username']) ? htmlspecialchars($user['username']) : ''; ?>">
    </label>

    <label>
        Email:
        <input type="email" name="email" value="<?php echo $user['email']; ?>">
    </label>

    <label>
        Password:
        <input type="password" name="password">
    </label>

    <label>
        Department:
        <select name="department">
            <option value="admin"<?php echo $user['department'] === 'System-admin' ? ' selected' : ''; ?>>admin</option>
            <option value="management"<?php echo $user['department'] === 'Management' ? ' selected' : ''; ?>>management</option>
            <option value="teacher"<?php echo $user['department'] === 'Teacher' ? ' selected' : ''; ?>>teacher</option>
        </select>
    </label>

    <label>
        Date:
        <input type="date" name="date" value="<?php echo $user['date']; ?>">
    </label>

    <input type="submit" value="Update User">
</form>

<br>
<a href="display.php">Back to Users</a>

</body>
</html>