<?php
    session_start();
    include("../includes/header.php");
?>

    <div class="container-fluid mt-3">
        <div class="d-flex flex-column justify-content-center align-items-center h-100 mt-5">
            <div class="text-dark p-5 w-100 border radius-3 mb-5" style="background-color: #c1deff;">
                <?php
                    if(isset($_SESSION['contact-text'])){
                        echo "<p class='text-center'>". $_SESSION['contact-text']."</p>";
                        unset($_SESSION['contact-text']);
                    }
                ?>
                <form action="../contact_form.php" method="post">
                    <h2 class="text-center mt-0">Contact Us Today</h2>
                    <div class="d-flex flex-column mt-5 w-100">
                        <label>Enter Your Name</label>
                        <input class="border radius-5" type="text" name="username">
                    </div>
                    <div class="d-flex flex-column mt-5 w-100">
                        <label>Enter your Contact Details</label>
                        <input class="border radius-5" type="text" name="contact">
                    </div>
                    <div class="d-flex flex-column mt-5">
                        <label>How Can We Help You Today?</label>
                        <textarea name="query" style="height: 5rem;"></textarea>
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