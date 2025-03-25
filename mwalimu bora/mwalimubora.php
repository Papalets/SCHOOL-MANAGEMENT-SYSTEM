<?php include 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MWALIMU BORA.CO.KE</title>
    <style>
        body {
            background-color: #ffcc00; /* Black color of the Kenyan flag */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #003399; /* Blue color of the Kenyan flag */
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.2rem;
            border: 1px solid #ccc;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        input[type="submit"] {
            background-color: #003399;
            color: #fff;
            padding: 0.5rem 2rem;
            border-radius: 0.2rem;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
        }

        input[type="submit"]:hover {
            background-color: #002266;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SCHOOL MANAGEMENT SYSTEM</h1>
        <h2>Login</h2>
        <form action="authentication.php" method="post">
            <label for="username">Username:</label>
            <input type="username" id="username" name="username"><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Submit">
        </form>
    </div>