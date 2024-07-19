<?php
    require_once './db/conn.php';
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_POST['username'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        $re_password=$_POST['re-password'];
        $phone=$_POST['number'];
        $dob=$_POST['dob'];
        $address=$_POST['address'];
        
        if($password!==$re_password){
            $_SESSION['error-message']="Password does not match";
            header("Location: ./php/signup.php");
        }else{
            $_SESSION['loggedin']=true;
            $_SESSION['text-message']=true;
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users`(`user_name`, `name`  , `password`, `phone`, `dob`, `address`) 
            VALUES ('$username','$name','$hashedPassword','$phone','$dob','$address')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['name']=$name;
                echo "Record added successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            header("Location: ./index.php");
        }
    }
   

   
?>