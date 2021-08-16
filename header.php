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
        #username-status, #email-status {
            padding: 5px 5px 0px 0px;
            display: none;
            margin-bottom: -10px;
        }
        #toggle-pass {
            text-align: right;
            margin-bottom: -10px;
        }
    </style>
    <script>
        $(document).ready(function(e) {
            var username_status = $('#username-status');
            var email_status = $('#email-status');
            var password_status = $('#password-status');
            
            $('#username').keyup(function(){
                let username = $(this).val();
                let phpfile = 'php-scripts/validate-username.php';
                if (username != '') {
                    $.post(phpfile, {checkUser: username}, function(data) {
                        username_status.html(data);
                        username_status.css("display", "block");
                    });
                }
                else {
                    $.post(phpfile, {checkUser: username}, function(data) {
                        username_status.html(data);
                        username_status.css("display", "none");
                    });
                }
            });
            $('#email').keyup(function(){
                let email = $(this).val();
                let phpfile = 'php-scripts/validate-email.php';
                if (email != '') {
                    $.post(phpfile, {checkEmail: email}, function(data) {
                        email_status.html(data);
                        email_status.css("display", "block");
                    });
                }
                else {
                    $.post(phpfile, {checkEmail: email}, function(data) {
                        email_status.html(data);
                        email_status.css("display", "none");
                    });
                }
              
            });
            
            $('#toggle').change(function() {
                if ($(this).is(':checked')){
                    $('#password').attr('type', 'text');
                    $('#toggle-text').text('Hide Password');
                }
                else {
                    $('#password').attr('type', 'password');
                    $('#toggle-text').text('Show Password');
                }
            });
           
           $('#form-submit').submit(function(){
               console.log('HELLO');
           });

        });

    
    </script>
</head>
    <body class="bg-gradient-primary">


