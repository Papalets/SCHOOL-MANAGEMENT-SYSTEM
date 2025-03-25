

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Generation</title>
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
        input,
        select,
        textarea,
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
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
<a href="MANAGEMENT.php">Home</a>
        <a href="ABOUT US MWALIMU BORA.php">About Us</a>
        <a href="CONTACT US.php">Contact Us</a>
        <a href="HANDOVER APPROVAL">Handover Approval</a>
        <a href="REPORTSGENERATION.php">Generate reports</a>
        <a href="logout.php">Log out</a>
    </div>
        
         </div>
    <div class="header">
        <h1>Report Generation</h1>
        <p>TEACHER PERFORMANCE</p>
    </div>
    <div class="container">
        <form action="report.php" method="post">
            <div class="form-group">
                <label for="Teacher">Teacher:</label>
               <input type="text" name="Teacher" id="Teacher">
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <select id="subject" name="subject">
                    <option value="math">Math</option>
                    <option value="science">Science</option>
                    <option value="english">English</option>
                </select>
            </div>
            <div class="form-group">
                <label for="start-date">Start Date:</label>
                <input type="date" name="start-date" id="start-date">
                <label for="end-date">End Date:</label>
                <input type="date" name="end-date" id="end-date">
            </div>
            <div class="form-group">
                <label for="Performsnce">Performance:</label>
                <textarea rows="5" cols="60" name="Performance" id="Performance" placeholder="Input teachers performance here"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Generate Report">
            </div>
        </form>
    </div>
</body>
</html>