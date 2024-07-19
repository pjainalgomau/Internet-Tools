<?php
    include("../includes/header.php");
?>
<div class="container-fluid mt-5">
    <div class="bi-container p-5" style="background-color: #c1deff; border-radius: 10px; margin: 2rem 0;">
        <h2 class="text-center mb-5">Purchase Your Ticket Now</h2>
        <form action="../payment_form.php" method="post">
            <div>
                <label class="mb-4" style="font-size: 1.5rem;">Water Park</label>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Children Below 5: Free</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('waterChild')">-</button>
                        <span id="waterChild">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('waterChild')">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Young (5-15): $50</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('waterYoung', 50)">-</button>
                        <span id="waterYoung">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('waterYoung', 50)">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Adults (15 Above): $75</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('waterAdult', 75)">-</button>
                        <span id="waterAdult">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('waterAdult', 75)">+</button>
                    </div>
                </div>
            </div>

            <hr>

            <div>
                <label class="mb-4" style="font-size: 1.5rem;">Amusement Park</label>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Children Below 5: Free</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('amuseChild')">-</button>
                        <span id="amuseChild">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('amuseChild')">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Young (5-15): $50</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('amuseYoung', 50)">-</button>
                        <span id="amuseYoung">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('amuseYoung', 50)">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Adults (15 Above): $75</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('amuseAdult', 75)">-</button>
                        <span id="amuseAdult">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('amuseAdult', 75)">+</button>
                    </div>
                </div>
            </div>

            <hr>

            <div>
                <label class="mb-4" style="font-size: 1.5rem;">Gate Pass (includes both):</label>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Children Below 5: Free</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('gateChild')">-</button>
                        <span id="gateChild">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('gateChild')">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Young (5-15): $70</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('gateYoung', 70)">-</button>
                        <span id="gateYoung">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('gateYoung', 70)">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p>Adults (15 Above): $100</p>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="decrease('gateAdult', 100)">-</button>
                        <span id="gateAdult">0</span>
                        <button type="button" class="btn btn-primary" onclick="increase('gateAdult', 100)">+</button>
                    </div>
                </div>
            </div>

            <hr>

            <div class="d-flex justify-content-between align-items-center">
                <h3>Total Amount:</h3>
                <h3 id="totalPrice">$0</h3>
                <input type="hidden" id="totalAmount" name="totalAmount" value="0">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success">Purchase Tickets</button>
            </div>
        </form>
    </div>
</div>
<script>
    let totalPrice = 0;

    function increase(id, price = 0) {
        let count = document.getElementById(id).innerText;
        count = parseInt(count) + 1;
        document.getElementById(id).innerText = count;
        totalPrice += price;
        document.getElementById('totalPrice').innerText = `$${totalPrice}`;
        document.getElementById('totalAmount').value = totalPrice;
    }

    function decrease(id, price = 0) {
        let count = document.getElementById(id).innerText;
        if (count > 0) {
            count = parseInt(count) - 1;
            document.getElementById(id).innerText = count;
            totalPrice -= price;
            document.getElementById('totalPrice').innerText = `$${totalPrice}`;
            document.getElementById('totalAmount').value = totalPrice;
        }
    }
</script>
<?php
    include("../includes/footer.php");
?>
