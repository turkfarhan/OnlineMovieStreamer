<?php
  session_start();
  include 'dbh.php';



    if(isset($_POST['login']))
    {
        $username =  $_POST['mail'];
        $password =  $_POST['pass'];
        $type = $_POST['type'];




    $sql = "SELECT * FROM user1 WHERE username = '$username' AND passwd = '$password' AND type='$type'";

    $result = $conn->query($sql);

    if(!$row = $result->fetch_assoc()) {
      echo "incorrect username or password";
    }else {

       $_SESSION['id'] = $row['id'];
        $_SESSION['type']=$type;
        header("Location: homepage.php");
      }

    }

?>
