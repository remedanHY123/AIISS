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

// Fetch data from the waterbodies table
$sql = "SELECT name, type, location, capacity, availability, quality, usage_rights, contact_person, contact_email, contact_phone FROM waterbodies";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Bodies Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .waterbody-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .waterbody-card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            width: 30%;
        }
        .waterbody-card h6 {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .waterbody-card p {
            margin: 0;
        }
    </style>
</head>
<body>


<?php include 'nav.php'; ?>

<main class="col-md-9 ms-sm-auto common col-lg-10 px-md-4">
    <div class="container">
        <h2 class="text-center my-4">Water Bodies</h2>
        <div class="waterbody-container">
            <?php
            if ($result->num_rows > 0) {
                // Output data for each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="waterbody-card">';
                    echo '<h6>Name:</h6><p>' . $row["name"] . '</p>';
                    echo '<h6>Type:</h6><p>' . $row["type"] . '</p>';
                    echo '<h6>Location:</h6><p>' . $row["location"] . '</p>';
                    echo '<h6>Capacity:</h6><p>' . $row["capacity"] . '</p>';
                    echo '<h6>Availability:</h6><p>' . $row["availability"] . '</p>';
                    echo '<h6>Quality:</h6><p>' . $row["quality"] . '</p>';
                    echo '<h6>Usage Rights:</h6><p>' . $row["usage_rights"] . '</p>';
                    echo '<h6>Contact Person:</h6><p>' . $row["contact_person"] . '</p>';
                    echo '<h6>Contact Email:</h6><p>' . $row["contact_email"] . '</p>';
                    echo '<h6>Contact Phone:</h6><p>' . $row["contact_phone"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No data available.</p>';
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
