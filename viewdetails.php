<?php
// Get the appointment details from the query parameters
$name = $_GET['name'];
$date = $_GET['date'];
$time = $_GET['time'];
$message = $_GET['message'];
$phone = $_GET['phone'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('2.jpg');
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
        }

        .card {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #5f00f5;
            color: #fff;
            padding: 10px 20px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 24px;
            margin-top: 0;
        }

        .details {
            padding: 20px;
        }

        .detail-item {
            margin-bottom: 20px;
        }

        .detail-item h4 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 18px;
            color: #5f00f5;
        }

        .detail-item p {
            margin: 0;
            font-size: 16px;
        }

        .back-btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #5f00f5;
            border-color: #5f00f5;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #4100a8;
            border-color: #4100a8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Appointment Details</h2>
            </div>
            <div class="details">
                <div class="detail-item">
                    <h4>Patient Name:</h4>
                    <p><?php echo htmlspecialchars($name); ?></p>
                </div>
                <div class="detail-item">
                    <h4>Date:</h4>
                    <p><?php echo htmlspecialchars($date); ?></p>
                </div>
                <div class="detail-item">
                    <h4>Time:</h4>
                    <p><?php echo htmlspecialchars($time); ?></p>
                </div>
                <div class="detail-item">
                    <h4>Reason:</h4>
                    <p><?php echo htmlspecialchars($message); ?></p>
                </div>
                <div class="detail-item">
                    <h4>Phone:</h4>
                    <p><?php echo htmlspecialchars($phone); ?></p>
                </div>
                <div class="back-btn-container">
                    <a href="doctor-prescriptions.php" class="btn btn-primary">Add Prescription</a>
                    <a href="doctor.php" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
