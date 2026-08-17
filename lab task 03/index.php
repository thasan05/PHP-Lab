<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    <form action="submit.php" method="POST">

        <label>Student Name:</label>
        <input type="text" name="student_name" required>
        <br><br>

        <label>Student ID:</label>
        <input type="text" name="student_id" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Department:</label>
        <input type="text" name="department" required>
        <br><br>

        <button type="submit">Register</button>

    </form>

</body>
</html>