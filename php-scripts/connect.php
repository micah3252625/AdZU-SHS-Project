<?php
  //connect to mysql database
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "adzushsdb"; //change later

  if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("Failed to Connect");
  }
  $mysqli = NEW MySQLi($dbhost, $dbuser, $dbpass, $dbname);
?>