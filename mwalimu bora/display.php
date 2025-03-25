<?php
// Retrieve the users from the database
$conn = mysqli_connect("localhost", "root", "", "walimu and co.");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM enrollment";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enrolled Users</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
    
}   

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: green;
        }

        tr:hover {background-color: #f5f5f5;}
        button{
           background-color:green;
           width: 25%;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-around;
        }
        .navbar a {
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<div class="navbar">
        <a href="system-admin.php">Home</a>
        <a href="ABOUT US ADMIN.php">About Us</a>
        <a href="CONTACT US ADMIN.php">Contact Us</a>
        <a href="display.php">Enroll Users</a>
        <a href="logout.php">Log out</a>
        
    </div>
<h2>Enrolled Users</h2>
<table>
    <thead>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Department</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a> |
                  <a href="delete.php?id=' . $row['id'] . '" onclick="return confirm(\'Are you sure you want to delete this user?\')">Delete</a></td>';
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No users found.</td></tr>";
    }
    ?>
    </tbody>
</table>
<br>
<a href="ENROLLMENT.php"><button>Add New User</button></a>

</body>
</html>
