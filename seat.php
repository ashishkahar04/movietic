<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/seat.css?v=<?php echo time(); ?> "> 
    <!-- this php code is for css work properly some css doesn't work properly -->

    <title>Seat</title>
</head>

<body>

    <div class="movie-container">
        <select id="movie">
            <option value="">Select Movie</option>
            <option value="220">Pathaan(Rs 220)</option>
            <option value="320">RRR(Rs 320)</option>
            <option value="250">Black Panther: Wakanda Forever(Rs 250)</option>
            <option value="260">Kantara(Rs 260)</option>
        </select>
        <select id="movie">
            <option value="">Select Show Timing</option>
            <option value="2.30pm">2.30 pm</option>
            <option value="5.20pm">5.20 pm</option>
            <option value="7.50">7.50 pm</option>
            <option value="10.10">10.10 pm</option>
        </select>
    </div>

    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>Available</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat sold"></div>
            <small>Sold</small>
        </li>
    </ul>

    <div class="container">
        <div class="screen"></div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>

        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>

        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>

        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>

        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>

        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>

        </div>


    </div>

    <p class="text">
        You have selected <span id="count">0</span>
        seat for a price of ₹ <span id="total">0</span>
    </p>

    <!-- Payment Page -->
    <div class="next-page">
        <a href="payment.php" class="next-btn">Payment</a>
    </div>

    <script src="js/seat.js"></script>

</body>

</html>