<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
} else {
    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO patients (fname, lname, email, password, contact, gender) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssssis", $fname, $lname, $email, $password, $contact, $gender);

        if ($stmt->execute()) {
            // Redirect to patient portal
            echo "<script>alert('Appointment successfully added.'); window.location.href='patient-portal.php';</script>";
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Execute statement
        if ($stmt->execute()) {
            echo "Appointment successfully added.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>