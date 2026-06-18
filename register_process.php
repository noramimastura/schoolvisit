<?php
include 'database.php';

$student_id = $_POST['student_id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$form_level = $_POST['form_level'];
$club = $_POST['club'];

$sql = "INSERT INTO club_registration 
        (student_id, fullname, email, phone, form_level, club)
        VALUES 
        ('$student_id', '$fullname', '$email', '$phone', '$form_level', '$club')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Registration Successful!</h2>";
    echo "<a href='RegisterPage.php'>Register Another Student</a><br>";
    echo "<a href='student_list.php'>Registered Students List</a><br>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>