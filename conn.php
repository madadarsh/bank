<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank_pro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if( !$conn ){
die( 'unable to connect');
}
?>