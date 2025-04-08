

<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "studentdata";

// Retrieve form data
$name = $_POST['name'];
$class = $_POST['class'];
$phone = $_POST['phone'];
$rollno = $_POST['rollno'];

// Create connection
$conn = new mysqli($servername,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Prepare and bind
$stmt = $conn->prepare("INSERT INTO registration (name, class, phone, rollno) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $class, $phone, $rollno);

// Execute the statement
if ($stmt->execute()) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
