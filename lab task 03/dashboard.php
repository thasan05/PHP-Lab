<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>

    <h2>Student Dashboard</h2>

    <h3>Session Information</h3>

    <?php

    if (isset($_SESSION['student_name'])) {
        echo "Student Name: " . $_SESSION['student_name'];
        echo "<br>";

        echo "Student ID: " . $_SESSION['student_id'];
    } else {
        echo "Session data is not available.";
    }

    ?>

    <h3>Cookie Information</h3>

    <?php

    if (isset($_COOKIE['student_name'])) {
        echo "Student Name from Cookie: " . $_COOKIE['student_name'];
    } else {
        echo "Cookie is not available.";
    }

    ?>

    <br><br>

    <a href="logout.php">Remove Session</a>
    <br><br>

    <a href="remove_cookie.php">Remove Cookie</a>

</body>
</html>