<?php
// Database connection
$servername = "localhost";
$username = "root";
$password_db = '';
$dbname = "aiiss";

$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO waterbodies (name, type, location, capacity, availability, quality, usage_rights, contact_person, contact_email, contact_phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $name, $type, $location, $capacity, $availability, $quality, $usage_rights, $contact_person, $contact_email, $contact_phone);

// Set parameters and execute
$name = $_POST['name'];
$type = $_POST['type'];
$location = $_POST['location'];
$capacity = $_POST['capacity'];
$availability = $_POST['availability'];
$quality = $_POST['quality'];
$usage_rights = $_POST['usage_rights'];
$contact_person = $_POST['contact_person'];
$contact_email = $_POST['contact_email'];
$contact_phone = $_POST['contact_phone'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
