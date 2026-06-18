<?php
include("database.php"); // Database connection

$sql = "SELECT * FROM club_registration";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registered Students</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color:#f2f2f2;
            padding:20px;
        }

        h2{
            text-align:center;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th, td{
            border:1px solid #ddd;
            padding:10px;
            text-align:left;
        }

        th{
            background-color:#4CAF50;
            color:white;
        }

        tr:nth-child(even){
            background-color:#f9f9f9;
        }

        tr:hover{
            background-color:#f1f1f1;
        }
    </style>
</head>
<body>

<h2>Registered Students List</h2>

<table>
    <tr>
        <th>Register_ID</th>
        <th>Student ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Form</th>
        <th>Club</th>
    </tr>

    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['registration_id']."</td>";
            echo "<td>".$row['student_id']."</td>";
            echo "<td>".$row['fullname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['form_level']."</td>";
            echo "<td>".$row['club']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No students registered yet.</td></tr>";
    }
    ?>
</table>

</body>
</html>