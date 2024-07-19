<?php
    session_start();
    include("../includes/header.php");
?>

    <div class="container-fluid h-100 ">
            <div class="d-flex flex-column justify-content-center align-items-center h-100 mt-3">
                <div class="text-dark p-5 w-50  border radius-3 mt-4" style="background-color: #c1deff;">
                    <?php
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
                            echo "<p>You are already logged in.<p>";
                            echo "<hr>";
                            echo "<form action='/logout_form.php' method='post'>
                                    <button type='submit' class='bg-info p-2 text-center'>Log Out</button>
                                    </form>";
                            exit();
                        }
                        if(isset($_SESSION['error-message'])){
                            echo "<p class='text-danger text-center'>". $_SESSION['error-message']. "</p>";
                            unset($_SESSION['error-message']);
                        }
                    ?>
                    <form method="post" action="/receive.php">
                    <h2 class="text-center mt-0">Login</h2>
                    <div class="d-flex flex-column mt-5 w-100">
                        <label>Enter Username</label>
                        <input class="border radius-5" type="text" name="login_id">
                    </div>
                    <div class="d-flex flex-column mt-5">
                        <label>Enter Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="mt-5 text-center">
                        <button type="submit">Submit</button>
                    </div>
                    
                    <p class="mt-5 text-center" >Don't have account? <a href="/php/signup.php">Sign up now.</a></p>
                    </form>
                </div>
            </div>
    </div>

<?php
    include("../includes/footer.php");
?>