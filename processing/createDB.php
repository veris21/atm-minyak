<?php
$servername = "localhost";
$username = "root";
$password = "minyak";
$database = "minyak";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

// // sql to create table
$sql = "CREATE TABLE log_subsidi (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    tipe VARCHAR(30) NOT NULL,
    nik VARCHAR(30) NOT NULL,
    banyak VARCHAR(30) NOT NULL,
    desa VARCHAR(50),
    reg_date TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Transaksi Subsidi created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

$conn->close();
?>