
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lesson Handover</title> 
        <style> body { background-color: #e6f8f3; font-family: Arial, sans-serif; margin: 0; padding: 0; }
.container { width: 800px; margin: 0 auto; background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }

.header { text-align: center; }

.header h1 { color: #228B22; margin: 0; padding: 0; font-size: 30px; }

.content { margin-top: 30px; }

.content h2 { color: #333; font-size: 24px; margin-bottom: 10px; }

.content p { color: #666; font-size: 16px; margin-bottom: 20px; line-height: 1.5; }

.content label { display: block; font-size: 16px; margin-bottom: 10px; }

.content input[type="text"] { width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 5px; }

.content input[type="checkbox"] { accent-color: #228B22; }

.content textarea { width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 5px; resize: vertical; } 

#submit { background-color: #228B22; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 8px;}
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
<div class="container">
    <form action="Handover.php" method="POST">
        <div class="header">
            <h1>Lesson Handover</h1> 
        </div>
        <div class="content">
            <h2>Subject:</h2>
            <input type="text" name="subject" id="subject" required>
            <h2>Grade:</h2>
            <input type="text" name="grade" id="grade" required>
            <h2>Teacher id:</h2>
            <input type="text" name="teacher_id" id="teacher_id" placeholder="eg.tsc_001" required>
            <h2>Teacher Handing Over:</h2>
            <input type="text" name="requesting_teacher" id="requesting_teacher" required>
            <h2>Teacher Receiving Handover:</h2>
            <input type="text" name="responsibility_teacher" id="responsibility_teacher" required>
            <h2>Reason:</h2>
            <input type="text" name="reason" id="reason" required><br><br>
            <input type="submit" name="submit" id="submit" value="Submit Request">
        </div>
    </form>
</div>
</body>
</html>