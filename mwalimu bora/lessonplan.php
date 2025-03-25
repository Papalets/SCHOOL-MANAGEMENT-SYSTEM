<!DOCTYPE html>
<html>
<head>
	<title>Lesson Template</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
		body {
			background-color: #fff;
			color: #333;
			font-family: Arial, sans-serif;
		}
		form {
			background-color: #e6ffed;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin: 0 auto;
			width: 300px;
			margin-top: 50px;
		}
		input[type="submit"] {
			background-color: #2ecc71;
			border: none;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #27ae60;
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
    <a href="TEACHER.php">Home</a>
        <a href="ABOUT US TEACHER.php">About Us</a>
        <a href="CONTACT US TEACHER.php">Contact Us</a>
        <a href="LESSON HANDOVER.php">Lesson Handover</a>
		<a href="MY HANDOVER HISTORY.php">My Handover History</a>
        <a href="lessonplan.php">Lesson Template</a>
		<a href="logout.php">Log out</a>
    </div>
    <div>
        <h1>DOWNLOAD THE LESSON PLAN TEMPLATE</h1>
    </div>
    <div>
<form action="download.php" method="post">
	<input type="hidden" name="file_name" value="MWALIMU BORA LESSON PLAN.doc">
	<button type="submit">Download File</button>
</form>
    </div>
</body>
</html>