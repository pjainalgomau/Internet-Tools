<?php
    require_once './db/conn.php';
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_POST['username'];
        $contact=$_POST['contact'];
        $query=$_POST['query'];
        
        $sql = "INSERT INTO `contact`(`name`, `contact_method`, `query`) 
        VALUES ('$username','$contact','$query')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['contact-text']="We get your request! We will get back to you soon.";
        } else {
            $_SESSION['contact-text']="Error: " . mysqli_error($conn);
        }
        header("Location: ./php/contact.php");
    }
?>