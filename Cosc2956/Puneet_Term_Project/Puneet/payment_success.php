<div class="container mt-5">
        <div class="alert alert-success text-center" role="alert">
            <?php
                echo "<p>Payment Done Successfully! You will be redirected to the home page in 5 seconds.</p>";
            ?>
        </div>
    </div>
<script>
    setTimeout(function() {
         window.location.href = 'index.php';
    }, 5000);
</script>