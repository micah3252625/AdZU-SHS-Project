<?php 
    if (isset($_POST['checkUser'])) {
        session_start();
        include('connect.php');
        $username = $mysqli->real_escape_string($_POST['checkUser']);
        $username_result = $mysqli->query("SELECT * FROM users WHERE username = '$username' LIMIT 1");

        // check for username
        if ($username_result->num_rows == 0) {
            echo "<span style='color: green'>$username is available.</span>";
        }
        else {
            echo "<span style='color: red'>$username is already taken.</span>";
        }
    }
?>