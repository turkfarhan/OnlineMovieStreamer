

<?php
  session_start();
  include 'dbh.php';


    $fname = strtolower($_POST['fname']);
    $lname =  strtolower($_POST['lname']);
    $name = $fname." ".$lname;
    $phn =  $_POST['phn'];
    $email =  $_POST['mail'];
    $username =  $_POST['mail'];
    $password =  $_POST['pass'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $date."/".$month."/".$year;

    
   


    $sql = "INSERT INTO user1(username, passwd, name, phone, email,type, DOB)
    values('$username','$password','$name','$phn','$email','$type','$dob')";
    $result = $conn->query($sql);

    echo '<script>if(confirm("Account created successfully.\nGo to Login Page")){location.replace("user-login.php")}</script>';

    // header("Location: user-login.php");
?>
