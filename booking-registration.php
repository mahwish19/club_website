<?php
//Connecting to the Database
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
    $organization = $_POST["organization"];
    $checkout = $_POST["checkout"];
    $select1 = $_POST["select1"];
    $arr = $_POST["memberinputs"];
    $memberinputs = implode(", ",$arr);
    $select2 = $_POST["select2"];
    
    $sql="INSERT INTO `registration` (`name`, `email`, `organization`, `phone`, `total_members`, `member_names`, `competition_name`) VALUES ('$name', '$email', '$organization', '$checkout', '$select1', '$memberinputs', '$select2')";
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