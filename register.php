<?php
    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
   $add = $_POST['add'];
   // $image = $_FILES['image']['name'];
    //$tmp_name = $_FILES['image']['tmp_name'];
    //$role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../registration.html";
            </script>';
    }
    else{
       // move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "insert into dbs (name, mobile, address, password) values('$name', '$mobile', '$add', '$pass') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../index.php";
                </script>';
        }
    }
    
?>