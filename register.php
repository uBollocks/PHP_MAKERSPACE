<html>
    <head>
        <title>Yusuf's PHP Website</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back</a><br/><br/>
        
        <form action="register.php" method="POST">
           Enter Email: <input type="text" 
           name="email" required="required" /> <br/>
           Enter password: <input type="password" 
           name="password" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
    </body>
</html> 

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "makerspace");
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
}
?>