<?php
    session_start();
    include("connection.php");

    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    //$role = $_POST['role'];

    $check = mysqli_query($connect, "select * from dbs where mobile='$mobile' and password='$pass'");

   if($check)
   {
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
       // $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "index.php";
            </script>';
    }
    
?>