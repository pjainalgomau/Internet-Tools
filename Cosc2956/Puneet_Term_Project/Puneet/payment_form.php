<?php
    session_start();
    $amount=$_POST['totalAmount'];
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
        $_SESSION['text-message']=$amount;
        header('Location: ./php/payment_gateway.php');
    }else{
        $_SESSION['error-message']="Please Log in first";
        header('Location: ./php/sign_in.php');
    }
    
?>