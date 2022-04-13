<?php



//server configuration

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techvyom";

//connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



$name = $_POST["name"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$college = $_POST["college"];
$roll_no = $_POST["roll"];
$branch = $_POST["branch"];
$year = $_POST["year"];
$indi_event = $_POST["name"];
$team_event = $_POST["name"];

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO `students` (`name`, `gender`, `roll_no`, `college`, `year`) VALUES ('$name', '$gender', '$roll_no', '$college', '$year')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
