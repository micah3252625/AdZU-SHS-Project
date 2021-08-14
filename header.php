<?php
  session_start();
  include("php-scripts/connect.php");
  include("php-scripts/check-login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AdZU SHS Database - Login and Registration</title>
    <!-- Custom fonts for this template-->
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        #status {
            padding: 5px 5px 0px 0px;
            display: none;
            margin-bottom: -10px;
        }
    </style>
    <script>
        $(document).ready(function(e) {
            $('#username').keyup(function(){
                let username = $(this).val();
                let status = $('#username-status');
                let phpfile = 'php-scripts/validate-username.php';
                if (username != '') {
                    $.post(phpfile, {checkUser: username}, function(data) {
                        status.html(data);
                        status.css("display", "block");
                    });
                }
                if (status.css("color", "red")) {
                    $(':input[type="submit"]').prop('disabled', true);
                }
                else {
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
            $('#email').keyup(function(){
                let email = $(this).val();
                let status = $('#email-status');
                let phpfile = 'php-scripts/validate-email.php';
                if (email != '') {
                    $.post(phpfile, {checkEmail: email}, function(data) {
                        status.html(data);
                        status.css("display", "block");
                    });
                }
                if (status.css("color", "red")) {
                    $(':input[type="submit"]').prop('disabled', true);
                }
                else {
                    $(':input[type="submit"]').prop('disabled', false);
                }
            })
            $('#confirmpassword').keyup(function() {
                if ($("#password").val() != $("#confirmpassword").val()) {
                    $("#password-status").html("Password do not match").css("color","red");
                    $(':input[type="submit"]').prop('disabled', true);
                }
                else{
                    $("#password-status").html("Password matched").css("color","green");
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });

        });
    </script>
</head>
    <body class="bg-gradient-primary">


