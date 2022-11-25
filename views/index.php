<?php
require_once "vendor/autoload.php";

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>

    <!-- Load external CSS styles -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>
<h2>
    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <div class="navbar">
                    <a href="/">Home</a>
                    <div class="dropdown">
                        <button class="dropbtn">Cities
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href='/weather?city=Vilnius'>Vilnius</a>
                            <a href='/weather?city=Tallinn'>Tallinn</a>
                            <a href='/weather?city=Stockholm'>Stockholm</a>
                        </div>
                    </div>
                </div>

</h2>
<h3>
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- The form -->
    <form class="example" action="/">
        <button type="submit"><i class="fa fa-search"></i></button>
        <input type="text" placeholder="Search for City..." name="city">
    </form>
</h3>
<h4 class="CityHeader"> Weather in <?php echo $cityName ?> </h4>
<h5>
    <div class="row">
        <div class="column">
            <img src="/images/humidity.jpg" alt="Humidity" style="width:50%">
            <p> Humidity is <?php echo $humidity ?>%</p>
        </div>
        <div class="column">
            <img src="/images/wind.jpg" alt="Wind Speed" style="width:50%">
            <p> Wind speed is <?php echo $windSpeed ?>m/s</p>
        </div>
        <div class="column">
            <img src="/images/temperature.png" alt="Temperature" style="width:50%">
            <p> Temperature is <?php echo $temperature ?><sup>o</sup> Celsius</p>
        </div>
    </div>
</h5>
<!-- Load external JavaScript -->
<!--<script src="scripts.js"></script> -->
<!-- For main images of temp / wind / humidity -->


</body>

</html>
