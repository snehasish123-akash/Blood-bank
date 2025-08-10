<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bbdms";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed: " . $conn->connection_error);
}
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Check user role
function isAdmin() {
    return isLoggedIn() && $_SESSION['user_type'] === 'admin';
}

function isDonor() {
    return isLoggedIn() && $_SESSION['user_type'] === 'donor';
}

function isSeeker() {
    return isLoggedIn() && $_SESSION['user_type'] === 'seeker';
}



?>
