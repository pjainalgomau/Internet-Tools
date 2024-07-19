<?php
    session_start();
    unset($_SESSION['loggedin']);
    header('Location: ./php/sign_in.php');
?>