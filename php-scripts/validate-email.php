<?php 
    if (isset($_POST['checkEmail'])) {
        session_start();
        include('connect.php');
        $email = $mysqli->real_escape_string($_POST['checkEmail']);
        $email_result = $mysqli->query("SELECT * FROM users WHERE email = '$email' LIMIT 1");

       
        // check for username
        if ($email_result->num_rows == 0) {
            echo "<span style='color: green'>$email is available.</span>";
            echo "<script> document.querySelector('#form-submit').disabled = false; </script>";
        }
        else {
            echo "<span style='color: red'>$email already exist.</span>";
            echo "<script> document.querySelector('#form-submit').disabled = true; </script>";
        }
    }
?>