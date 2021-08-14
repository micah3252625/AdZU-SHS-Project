
<?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        include('validate-username.php');
        include('validate-email.php');
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmpassword'];
        $office = $_POST['office'];
        
        $query = "INSERT INTO users(fname, lname, username, password, email, office) VALUES('$fname','$lname','$username', '$password', '$email', '$office')";
        mysqli_query($conn, $query);
        echo "<script>
                Swal.fire(
                  'Registered Successfully!',
                  'Hi! $fname',
                  'success'
                ).then(function() {
                  window.location = './login.php'
                });
               </script>";
              //echo("<p class='success'>Account successfully registered!.</p>");
      }
?>