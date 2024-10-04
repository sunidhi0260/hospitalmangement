<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "appointment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Decode JSON data sent from JavaScript
    $prescriptionData = json_decode($_POST['prescriptionData'], true);

    // Prepare and execute SQL insert statements for each prescription
    foreach ($prescriptionData as $prescription) {
        list($medicineName, $dosage, $duration) = explode(' - ', $prescription);
        $sql = "INSERT INTO prescriptions (medicinename, dosage, duration, prescribeddate)
                VALUES ('$medicineName', '$dosage', '$duration', NOW())";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    echo "Active prescriptions saved successfully.";
}

$conn->close();
?>
