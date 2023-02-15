<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "makerspace_users");
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

if($_POST){
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $mysqldate = date('Y-m-d H:i:s');
    #Test
    echo "Email entered is: ". $email . "<br />";
    echo "Password entered is: ". $password;
    echo "Date Created is: ". $mysqldate;
    $sql = "INSERT INTO users ";
    $sql .= "(email, password, created_date) ";
    $sql .= "VALUES (";
    $sql .= "'" . $email . "',";
    $sql .= "'" .  $password . "',";
    $sql .= "'" . $mysqldate . "'";
    $sql .= ")";
    $result = mysqli_query($mysqli, $sql);

    if (!$mysqli -> query($sql)) {
        printf("%d Row inserted.\n", $mysqli->affected_rows);
      }
      
      $mysqli -> close(); 
      Print '<script>alert("Registered Account!");</script>';        // Prompts the user
      Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php

}
?>