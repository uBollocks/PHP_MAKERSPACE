<?php
   function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
   session_start();
    

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "makerspace_users");
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    # P1: Clear out SQL Injection Related strings
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['password']);

    # P2: Minimise SQL Injection with Prepared Staments
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    if($stmt->execute())
    {
       $result = $stmt->get_result();
       if($result->num_rows)
       {
        Print '<script>alert("Logged In!");</script>';        // Prompts the user
        Print '<script>window.location.assign("welcome.php");</script>'; // redirects to login.php
        $_SESSION['log'] = $email;
        header('Location: welcome.php');
        exit();
       }
       else
        $err = "Wrong Username and/or Password";
    }
    $conn->close();
?>

