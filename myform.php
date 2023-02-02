<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$db = "register";

//connect to database

$conn = new mysqli($servername,$username,$password,$db);


$n = $_POST['Name'];
$e = $_POST['Email'];
$c = $_POST['Comments'];


//check connection
// if($conn->connect_error)
// {
//     die("Connection Failed :".$conn->connect_error);
// }
// else
// {
//     echo "Successfully Connected to Database";
// }

// Create Database

// $sql = "CREATE DATABASE register";
// if($conn->query($sql)===TRUE)
// {
//     echo "Database Created Successfully";
// }
// else
// {
//     echo "Error Creating Database".$conn->error;
// }

// Create table in database

// $sql = "CREATE TABLE mytable(
//         Name varchar(50) NOT NULL,
//         Email varchar(50) NOT NULL,
//         Comments varchar (1000))";

// Insert data into table

$sql = "INSERT INTO mytable(Name,Email,Comments) VALUES('$n','$e','$c')";
if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>