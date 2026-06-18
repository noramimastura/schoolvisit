<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Club Registration</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 400px;
        }

        h2 {
            text-align: center;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 48%;
            margin-top: 10px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Club Registration Form</h2>

    <form action="register_process.php" method="post">

        <label for="student_id">Student ID:</label><br>
        <input type="text" id="student_id" name="student_id" required><br><br>

        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="form_level">Form:</label><br>
        <select id="form_level" name="form_level" required>
            <option value="">-- Select Form --</option>
            <option value="Form 1">Form 1</option>
            <option value="Form 2">Form 2</option>
            <option value="Form 3">Form 3</option>
            <option value="Form 4">Form 4</option>
            <option value="Form 5">Form 5</option>
        </select><br><br>

        <label for="club">Club:</label><br>
        <select id="club" name="club" required>
            <option value="">-- Select Club --</option>
            <option value="Robotics Club">Robotics Club</option>
            <option value="Sports Club">Sports Club</option>
            <option value="Photography Club">Photography Club</option>
        </select><br><br>

        <div class="buttons">
            <input type="submit" value="Register">
            <input type="reset" value="Clear">
        </div>

    </form>

</div>

</body>
</html>