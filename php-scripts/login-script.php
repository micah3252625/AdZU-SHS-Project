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
            
           // header("Location: test.php");
            die;
          }else{
            alert("Incorrect username or password!");
          }
        }
        else{
          alert("Invalid username or password!");
        }
      }
    }else{
      alert("Please fill out all the fields.");
    }
  }
?>