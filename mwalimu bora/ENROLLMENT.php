<?php include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        select,
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41;
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
   <form action="register.php" method="post">

    <div class="header">
        <h1>Enrollment</h1>
        <p>Enroll new users to the platform.</p>
    </div>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
                <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department">
                    <option value="Management">Management</option>
                    <option value="Teacher">Teacher</option>
                    <option value="System-admin">Administrator</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date&Time:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div>
                <button type="submit" name="submit"> Enroll user</button>
            </div>
        </form>
    </div>
</body>
</html>