<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "codewizard";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dept = $_POST["dept"];
    $year = $_POST["year"];
    $checkout = $_POST["checkout"];
    $select1 = $_POST["select1"];
    $select2 = $_POST["select2"];
    
    $sql="INSERT INTO `membership` (`name`, `email`, `department`, `year`, `phone`, `domain`, `experience`) VALUES ('$name', '$email', '$dept', '$year', '$checkout', '$select1', '$select2')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        include 'abc.php';
    }
    else {
        echo "record has not been entered<br>".
        mysqli_error($conn);   
    }
}
?>