<?php

$city = $_GET['city'];

$url = "https://api.openweathermap.org/data/2.5/forecast?q=$city&appid=6a74d0568f1e312900c750047ab804ef&units=metric";
// API = 6a74d0568f1e312900c750047ab804ef
$climate = json_decode(file_get_contents($url));
// $climate = json_decode(file_get_contents($url), true);
date_default_timezone_set('Asia/Dhaka');

$temp1 = $climate->list[0]->main->temp;
$temp2 = $climate->list[8]->main->temp;
$temp3 = $climate->list[16]->main->temp;
$temp4 = $climate->list[24]->main->temp;
$temp5 = $climate->list[32]->main->temp;

$temp_feels_like1 = $climate->list[0]->main->feels_like;
$temp_feels_like2 = $climate->list[8]->main->feels_like;
$temp_feels_like3 = $climate->list[16]->main->feels_like;
$temp_feels_like4 = $climate->list[24]->main->feels_like;
$temp_feels_like5 = $climate->list[32]->main->feels_like;

$presure1 = $climate->list[0]->main->pressure;
$presure2 = $climate->list[8]->main->pressure;
$presure3 = $climate->list[16]->main->pressure;
$presure4 = $climate->list[24]->main->pressure;
$presure5 = $climate->list[32]->main->pressure;

$humidity1 = $climate->list[0]->main->humidity;
$humidity2 = $climate->list[8]->main->humidity;
$humidity3 = $climate->list[16]->main->humidity;
$humidity4 = $climate->list[24]->main->humidity;
$humidity5 = $climate->list[32]->main->humidity;

$weather_desc1 = $climate->list[0]->weather[0]->description;
$weather_desc2 = $climate->list[8]->weather[0]->description;
$weather_desc3 = $climate->list[16]->weather[0]->description;
$weather_desc4 = $climate->list[24]->weather[0]->description;
$weather_desc5 = $climate->list[32]->weather[0]->description;

$wind_speed1 = $climate->list[0]->wind->speed;
$wind_speed2 = $climate->list[8]->wind->speed;
$wind_speed3 = $climate->list[16]->wind->speed;
$wind_speed4 = $climate->list[24]->wind->speed;
$wind_speed5 = $climate->list[32]->wind->speed;

$wind_dir1 = $climate->list[0]->wind->deg;
$wind_dir2 = $climate->list[8]->wind->deg;
$wind_dir3 = $climate->list[16]->wind->deg;
$wind_dir4 = $climate->list[24]->wind->deg;
$wind_dir5 = $climate->list[32]->wind->deg;

$cityname = $climate->city->name;
$countryname = $climate->city->country;
$localtime = $climate->list[0]->dt;
$day1 = date("D, F j, Y, g:i A", $localtime);
$day2 = date("D, F j, Y, g:i A", strtotime($day1 . ' + 1 days'));
$day3 = date("D, F j, Y, g:i A", strtotime($day2 . ' + 1 days'));
$day4 = date("D, F j, Y, g:i A", strtotime($day3 . ' + 1 days'));
$day5 = date("D, F j, Y, g:i A", strtotime($day4 . ' + 1 days'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/weather.css">
    <title>Weather Forecast</title>
    <style>
        .center {
            margin: auto;
            width: 100%;
            margin-top: 10rem;
            align-content: center;
        }
    </style>
</head>

<body>
    <div class="container center main">
        <div class="row">
            <div class="row">
                <h2>
                    <?php
                    echo $cityname.', '.$countryname;
                    ?>
                </h2>
            </div>
            <div class="col">
                <div class="card my-3" style="width: 13rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $day1;
                            ?>
                        </h5>
                        <h5 class="card-subtitle mb-2">
                            <?php
                            echo $temp1 . "&deg;C";
                            ?>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                            <?php
                            echo "Feels like : " . $temp_feels_like1 . "&deg;C";
                            ?>
                        </h6>
                        <h6 class="card-text mb-2">
                            <?php
                            echo $weather_desc1;
                            ?>
                        </h6>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Humidity: ' . $humidity1 . '%<br>Pressure: ' . $presure1 . ' Pa';
                            ?>
                        </p>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Wind Speed: ' . $wind_speed1 . ' m/s<br>Direction: ' . $wind_dir1 . ' Degrees';
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card my-3" style="width: 13rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $day2;
                            ?>
                        </h5>
                        <h5 class="card-subtitle mb-2">
                            <?php
                            echo $temp2 . "&deg;C";
                            ?>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                            <?php
                            echo "Feels like : " . $temp_feels_like2 . "&deg;C";
                            ?>
                        </h6>
                        <h6 class="card-text mb-2">
                            <?php
                            echo $weather_desc2;
                            ?>
                        </h6>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Humidity: ' . $humidity2 . '%<br>Pressure: ' . $presure2 . ' Pa';
                            ?>
                        </p>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Wind Speed: ' . $wind_speed2 . ' m/s<br>Direction: ' . $wind_dir2 . ' Degrees';
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card my-3" style="width: 13rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $day3;
                            ?>
                        </h5>
                        <h5 class="card-subtitle mb-2">
                            <?php
                            echo $temp3 . "&deg;C";
                            ?>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                            <?php
                            echo "Feels like : " . $temp_feels_like3 . "&deg;C";
                            ?>
                        </h6>
                        <h6 class="card-text mb-2">
                            <?php
                            echo $weather_desc3;
                            ?>
                        </h6>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Humidity: ' . $humidity3 . '%<br>Pressure: ' . $presure3 . ' Pa';
                            ?>
                        </p>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Wind Speed: ' . $wind_speed3 . ' m/s<br>Direction: ' . $wind_dir3 . ' Degrees';
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card my-3" style="width: 13rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $day4;
                            ?>
                        </h5>
                        <h5 class="card-subtitle mb-2">
                            <?php
                            echo $temp4 . "&deg;C";
                            ?>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                            <?php
                            echo "Feels like : " . $temp_feels_like4 . "&deg;C";
                            ?>
                        </h6>
                        <h6 class="card-text mb-2">
                            <?php
                            echo $weather_desc4;
                            ?>
                        </h6>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Humidity: ' . $humidity4 . '%<br>Pressure: ' . $presure4 . ' Pa';
                            ?>
                        </p>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Wind Speed: ' . $wind_speed4 . ' m/s<br>Direction: ' . $wind_dir4 . ' Degrees';
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card my-3" style="width: 13rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $day5;
                            ?>
                        </h5>
                        <h5 class="card-subtitle mb-2">
                            <?php
                            echo $temp5 . "&deg;C";
                            ?>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                            <?php
                            echo "Feels like : " . $temp_feels_like5 . "&deg;C";
                            ?>
                        </h6>
                        <h6 class="card-text mb-2">
                            <?php
                            echo $weather_desc5;
                            ?>
                        </h6>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Humidity: ' . $humidity5 . '%<br>Pressure: ' . $presure5 . ' Pa';
                            ?>
                        </p>
                        <p class="card-subtitle mb-2">
                            <?php
                            echo 'Wind Speed: ' . $wind_speed5 . ' m/s<br>Direction: ' . $wind_dir5 . ' Degrees';
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="index.html">
                        <button type="submit" class="btn btn-info mb-3">Go Back</button>
                    </form>
                </div>
            </div>
        </div>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"></script>
</body>

</html>