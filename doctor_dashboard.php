<?php
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
    // Query to get the upcoming appointments
    $sql = "SELECT name, age, phone, gender, doctor, message FROM sai";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/doctor-background.jpg') no-repeat center center fixed;
            background-size: cover;
            background-color: rgba(255, 255, 255, 0.7);
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #5f00f5;
            padding: 20px 0;
            color: #fff;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
        }

        .card {
            background-color: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #5f00f5;
            color: #fff;
            padding: 10px 20px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card-title {
            font-size: 24px;
            margin-top: 0;
        }

        .card-body {
            padding-top: 20px;
        }

        .btn-primary {
            background-color: #5f00f5;
            border-color: #5f00f5;
        }

        .btn-primary:hover {
            background-color: #4100a8;
            border-color: #4100a8;
        }

        .btn-outline-primary {
            color: #5f00f5;
            border-color: #5f00f5;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #5f00f5;
            border-color: #5f00f5;
        }

        .patient-info {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .patient-info h3 {
            color: #5f00f5;
            margin-top: 0;
        }

        .patient-info ul {
            list-style-type: none;
            padding: 0;
        }

        .patient-info li {
            margin-bottom: 10px;
        }

        .appointments {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }

        .appointment-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .appointment-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .appointment-item h4 {
            margin-top: 0;
            margin-bottom: 5px;
        }

        .appointment-item p {
            margin: 0;
        }

        .appointment-actions {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Doctor Dashboard</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="patient-info">
                    <h3>Patient Information</h3>
                    <ul>
                        <li><strong>Name:</strong> John Doe</li>
                        <li><strong>Age:</strong> 35</li>
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Contact:</strong> +1234567890</li>
                        <li><strong>Medical History:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li><strong>Ongoing Treatments:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Upcoming Appointments</h2>
                    </div>
                    <div class="card-body">
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <div class="appointment-item">
                                    <h4>Patient Name: <?php echo $row['name']; ?></h4>
                                    <p>Age: <?php echo $row['age']; ?></p>
                                    <p>Gender: <?php echo $row['gender']; ?></p>
                                    <p>Contact: <?php echo $row['phone']; ?></p>
                                    <p>Doctor: <?php echo $row['doctor']; ?></p>
                                    <p>Message: <?php echo $row['message']; ?></p>
                                    <div class="appointment-actions">
                                        <a href="#" class="btn btn-primary">View Details</a>
                                        <a href="#" class="btn btn-outline-primary">Reschedule</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No upcoming appointments.</p>
                        <?php endif; ?>
                        <a href="#" class="btn btn-primary btn-block">View All Appointments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
