<?php

function check_login($conn){
  if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $query = "SELECT * FROM users WHERE id = '$id' limit 1";

    $result = mysqli_query($conn, $query);
    if($result && (mysqli_num_rows($result) > 0)){
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
  }
  //bad login credentials
  header("Location: login.php");
  die;
}

function alert($message){
  echo "<script>alert('$message');</script>";
}