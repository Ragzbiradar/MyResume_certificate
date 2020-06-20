<?php
$servername = "localhost";
$username = "prateek";
$password = "quiz";
$database = "quizzer";

// Create connection
$con = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully  1111111";
?>