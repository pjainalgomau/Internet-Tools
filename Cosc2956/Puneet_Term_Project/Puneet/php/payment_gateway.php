<?php
    session_start();
    include("../includes/header.php");
?>

    <div class="container-fluid mb-5">
            <div class="d-flex flex-column justify-content-center align-items-center mt-5">
                <div class="text-dark p-5 w-100 border radius-3" style="background-color: #c1deff; margin: 2rem 0;">
                    <?php
                        if(isset($_SESSION['text-message'])){
                            echo "<h2> Total Amount: $".$_SESSION['text-message']."</h2>";
                            echo "<hr>";
                        }
                    ?>
                    <form method="post" action="/payment_success.php">
                        <div class="d-flex flex-column mt-5 w-100">
                            <label>Enter Card Holder Name</label>
                            <input class="border radius-5" type="text" name="login_id">
                        </div>
                        <div class="d-flex flex-column mt-5 w-100">
                            <label>Enter Card Number</label>
                            <input class="border radius-5" type="text" name="login_id">
                        </div>
                        <div class="d-flex flex-column mt-5">
                            <label>Enter Expiry Date</label>
                            <input type="password" name="password">
                        </div>
                        <div class="d-flex flex-column mt-5">
                            <label>Enter CVV</label>
                            <input type="password" name="password">
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