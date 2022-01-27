<?php

$servername = "localhost";
$dbname = "electric_tracking-bus";
$username = "electric_bus";
$password = "g#EZSB5mGuzN";

$conn = mysqli_connect($servername, $username, $password, $dbname);

ini_set('date.timezone', 'Asia/Jakarta');

$now = new DateTime();
$datenow = $now->format('Y-m-d H:i:s');
$datenow = strtotime($datenow);
$datenow = $datenow + 25200;

$id_bus = $_GET["id_bus"];
$speed = $_GET["speed"];
$lat = $_GET["lat"];
$long = $_GET["long"];
$heading = $_GET["heading"];
$battery = $_GET["battery"];

$sql = "INSERT INTO bus_location (id_bus, speed, latitude, longitude, heading, battery, time) VALUES ('$id_bus', '$speed', '$lat', '$long', '$heading', '$battery', '$datenow')";

if ($conn->query($sql) === TRUE) {
    echo json_encode("Ok");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
