<?php

// Delete the cookie
setcookie("student_name", "", time() - 3600);

// Go back to dashboard
header("Location: dashboard.php");
exit();

?>