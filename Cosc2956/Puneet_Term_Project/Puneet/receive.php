<?php
    session_start();
    require_once './db/conn.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['login_id'];
        $password=$_POST['password'];
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `user_name` = ?");
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result){
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                if(password_verify( $password,$row['password'])){
                    $_SESSION['loggedin']=true;
                    $_SESSION['name']=$row['name'];
                    header("Location: ./index.php");
                    exit();
                }else{
                    $_SESSION['error-message']="Invalid Id or Password";
                    header("Location: ./php/sign_in.php");
                    exit();
                }
            }else{
                $_SESSION['error-message']="Invalid Id or Password";
                header("Location: ./php/sign_in.php");
                exit();
            }
            
        }
        else{
            $_SESSION['error-message']="No Data Available";
            header("Location: ./php/sign_in.php");
            exit();
        }
    }
    else{       
        $_SESSION['error-message']="Error executing query: " . mysqli_error($conn);;
        header("Location: ./php/sign_in.php"); 
        exit();                   
    } 
?>