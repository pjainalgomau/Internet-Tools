<?php
    require_once('./includes/header.php');
    session_start();
?>

<div class="container-fluid mt-5">
    <div class="index-img mt-5">
        <?php
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
                if(isset($_SESSION['name'])){
                    echo "<h1>Welcom Back ". $_SESSION['name'] ."!</h1>";
                }else{
                    echo "<h1>Welcome To Splash</h1>";
                }
            }else{
                echo "<h1>Welcome To Splash</h1>";
            }
        ?>
    </div>

    <div class="mt-5 middle-container">
        <h2 class="text-white">Our Attractions</h2>
        <div class="mt-4 card">
            <div class="card-itm">
                <img src="/assets/water-fall.webp" alt="Water Fall" class="card-img">
                <p>Water Fall</p>
            </div>
            <div class="card-itm">
                <img src="/assets/rides.jpeg" alt="Water Rides" class="card-img">
                <p>Water Rides</p>
            </div>
            <div class="card-itm">
                <img src="/assets/amusement.webp" alt="Amusement Park" class="card-img">
                <p>Amusement</p>
            </div>
        </div>
    </div>
    <hr class="my-4" style="border-color: #f8f9fa;">
    <div class="text-center">
        <h2 class="text-center text-white p-3 rounded">Admissions & Hours</h2>
        <div class="row bottom-container">
            <div class="col-md-6">
                <h3 class="bg-info text-white p-3 rounded">Opening Hours</h3>
                <table class="table table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Day</th>
                            <th>Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>9 A.M. - 10 P.M.</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>9 A.M. - 10 P.M.</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>9 A.M. - 10 P.M.</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>9 A.M. - 10 P.M.</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>9 A.M. - 10 P.M.</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>10 A.M. - 12 A.M.</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>10 A.M. - 12 A.M.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h3 class="bg-info text-white p-3 rounded">Pricing</h3>
                <div>
                    <h4>Water Park</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Children Below 5: Free</li>
                        <li class="list-group-item">Young (5-15): $50</li>
                        <li class="list-group-item">Adults (15 Above): $75</li>
                    </ul>
                </div>
                <hr>
                <div>
                    <h4>Amusement Park</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Children Below 5: Free</li>
                        <li class="list-group-item">Young (5-15): $50</li>
                        <li class="list-group-item">Adults (15 Above): $75</li>
                    </ul>
                </div>
                <hr>
                <div>
                    <h4>Gate Pass (include both)</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Children Below 5: Free</li>
                        <li class="list-group-item">Young (5-15): $70</li>
                        <li class="list-group-item">Adults (15 Above): $100</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php
    require_once('./includes/footer.php');
?>
