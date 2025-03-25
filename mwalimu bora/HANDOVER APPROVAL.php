<?php
include 'connection.php';

$sql = "SELECT * FROM teacher_request";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta  name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #228B22;
            color: white;
            text-align: center;
            padding: 20px;
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
        .navbar a.active{
            background-color: #228B22;
            color: white;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 60px;
        }
        .section {
            margin-bottom: 60px;
        }
        .row{
            overflow-x: auto;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
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
        .handover-pending {
            background-color: #F0DE36;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .handover-approved{
            background-color: green;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .handover-denied {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .approve-handover-button{
            background-color: #0D1282;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            margin-left: 18px;
        }
        .deny-handover-button{
            background-color: #D71313;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            margin-left: 18px;
        }
    </style>
</head>
<body>
<div class="navbar">
    <a href="MANAGEMENT.php">Home</a>
        <a href="ABOUT US MWALIMU BORA.php">About Us</a>
        <a href="CONTACT US.php">Contact Us</a>
        <a href="HANDOVER APPROVAL.php">Handover Approval</a>
        <a href="REPORTSGENERATION.php">Generate reports</a>
        <a href="logout.php">Log out</a>
    </div>
    <div class="container">
        <h1 class="header">MANAGEMENT PORTAL</h1>
    </div>
    <div class="row">
			<table class="table">
							<thead>
                                <th>ID</th>
								<th>Subject</th>
								<th>Grade</th>
                                <th>Teacher id</th>
								<th>Requesting Teacher</th>
                                <th>Responsibility Teacher</th>
								<th>Reason</th>
								<th>Status</th>
                                <th>Action</th>
							</thead>
							 <tbody>
							 	<?php 
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {                            
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['subject'] . "</td>";
                                echo "<td>" . $row['grade'] . "</td>";
                                echo "<td>" . $row['teacher_id'] . "</td>";
                                echo "<td>" . $row['requesting_teacher'] . "</td>";
                                echo "<td>" . $row['responsibility_teacher'] . "</td>";
                                echo "<td>" . $row['reason'] . "</td>";
                                ?>
                                <?php 
                                if ($row['status'] == 0) {
                                    echo "<td><span class='badge badge-warning handover-pending'>Pending</span><td>";
                                }
                                else if ($row['status'] == 1){
                                    echo "<td><span class='badge badge-success handover-approved'>Approved</span><td>";
                                }
                                else{
                                    echo "<td><span class='badge badge-danger handover-denied'>Denied</span><td>";
                                }
                                echo "<button class='btn btn-success approve-handover-button' data-id='$row[id]'>Approve</button>";
                                echo "<button class='btn btn-danger deny-handover-button' data-id='$row[id]'>Deny</button>";
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    <br>
    </div>
<script>
        document.querySelectorAll('.approve-handover-button').forEach((button) => {
        button.addEventListener('click', () => {
        const id = button.dataset.id;
        fetch(`approve-handover.php?id=${id}`)
            .then((response) => {
                if (response.ok) {
                    button.closest('tr').querySelector('.handover-pending').classList.add('hidden');
                    button.closest('tr').querySelector('.handover-approved').classList.remove('hidden');
                    button.disabled = true;
                    button.closest('tr').querySelector('.deny-handover-button').disabled = true;
                } else {
                    throw new Error('Error approving handover');
                }
            })
            .catch((error) => {
                console.error(error);
            });
    });
});
document.querySelectorAll('.deny-handover-button').forEach((button) => {
    button.addEventListener('click', () => {
        const id = button.dataset.id;
        fetch(`deny-handover.php?id=${id}`)
            .then((response) => {
                if (response.ok) {
                    button.closest('tr').querySelector('.handover-pending').classList.add('hidden');
                    button.closest('tr').querySelector('.handover-denied').classList.remove('hidden');
                    button.disabled = true;
                    button.closest('tr').querySelector('.approve-handover-button').disabled = true;
                } else {
                    throw new Error('Error denying handover');
                }
            })
            .catch((error) => {
                console.error(error);
            });
    });
});
</script>
</body>
</html>
									