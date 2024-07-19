<?php
    session_start();
    include("../includes/header.php");
?>

    <div class="container-fluid mt-3">
        <div class="d-flex flex-column justify-content-center align-items-center h-100 mt-5">
            <div class="text-dark p-5 w-50 border radius-3 mb-5" style="background-color: #c1deff;">
                <?php
                    if(isset($_SESSION['error-message'])){
                        echo "<p class='text-danger text-center'>". $_SESSION['error-message']. "</p>";
                        unset($_SESSION['error-message']);
                    }
                ?>
                <form action="../signup_form.php" method="post">
                    <h2 class="text-center mt-0">Sign Up</h2>
                    <div class="d-flex flex-column mt-5 w-100">
                        <label>Enter Username</label>
                        <input class="border radius-5" type="text" name="username">
                    </div>
                    <div class="d-flex flex-column mt-5 w-100">
                        <label>Enter Your Name</label>
                        <input class="border radius-5" type="text" name="name">
                    </div>
                    <div class="d-flex flex-column mt-5">
                        <label>Enter Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="d-flex flex-column mt-5">
                        <label>Confirm Password</label>
                        <input type="password" name="re-password">
                    </div>
                    <div class="d-flex flex-column mt-5">
                        <label>Enter Phone Number</label>
                        <input type="text" name="number">
                    </div>
                    <div class="d-flex flex-column mt-5">
                        <label>Enter Date Of Birth</label>
                        <input type="date" name="dob">
                    </div>
                    <div class="d-flex flex-column mt-5">
                        <label>Enter Address</label>
                        <input type="text" name="address">
                    </div>
                    <div class="mt-5 text-center">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
    include("../includes/footer.php");
?>