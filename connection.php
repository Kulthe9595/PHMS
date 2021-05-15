<?php
// Connecting to the Database
$servername = "localhost";
$username= "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername,$username,$password);
global $conn;

// Connection get Faild if connection was not successful
if($conn){
    // echo'Database Connection Ok...!!';
}else{
    echo'Database Connection Faild...!!!!")';
}

// Create a db
$sql = "CREATE DATABASE  IF NOT EXISTS PHMS";   
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    // echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

// ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––

// selecting our database 
$databasename = mysqli_select_db($conn,'PHMS');  
// Create a table in the db
$sql1 = "CREATE TABLE IF NOT EXISTS users (
    id int(255) PRIMARY KEY AUTO_INCREMENT,
    username varchar(255),
    password varchar(255),
    usertype varchar(100)
    )";
$result1 = mysqli_query($conn, $sql1);

// Check for the table creation success
if($result1){
    // echo "The Users table was created successfully!<br>";
}
else{
    echo "The users table was not created successfully because of this error ---> ". mysqli_error($conn);
}


$sql1 = "CREATE TABLE IF NOT EXISTS Patients (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    city varchar(255),
    mobile bigint(10),
    age int(11),
    gender varchar(255)
    )";
$result1 = mysqli_query($conn, $sql1);

// Check for the table creation success
if($result1){
    // echo "The Users table was created successfully!<br>";
}
else{
    echo "The users table was not created successfully because of this error ---> ". mysqli_error($conn);
}

?>