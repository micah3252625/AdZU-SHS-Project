<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
      $query = "SELECT * FROM users WHERE username = '$username' limit 1";
      $result = mysqli_query($conn, $query);
      if($result){
        if($result && (mysqli_num_rows($result) > 0)){
          $user_data = mysqli_fetch_assoc($result);
          if ($user_data['password'] == $password){
            $_SESSION['id'] = $user_data['id'];
            echo "<script>
                  Swal.fire(
                    'Registered Successfully!',
                    'Welcome! $username',
                    'success'
                  ).then(function() {
                    window.location = './404.html'
                  });
                </script>";
           // header("Location: test.php");
            die;
          }else{
            echo "<script>
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Username or password is incorrect',
                    })
                </script>";
          }
        }
      }
    }
  }
?>