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
}

// Fetch appointments from the database
$sql = "SELECT name, date, time, message, phone FROM sai ORDER BY date, time";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Doctor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(3.jpg) no-repeat center center fixed;
            background-size: cover;
            background-color: rgba(255, 255, 255, 0.7);
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #5f00f5;
            color: #fff;
            padding: 5px 2px; /* Reduced padding */
        }

        .navbar-brand {
            color: #fff;
            font-size: 24px; /* Increased font size */
            font-weight: bold; /* Bold font weight */
            margin-right: 20px; /* Added margin */
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 16px;
        }

        .header {
            padding: 20px 0;
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
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Welcome Doctor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light btn-sm" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Upcoming Appointments</h2>
                    </div>
                    <div class="card-body">
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <div class="appointment-item">
                                    <h4>Patient Name: <?php echo htmlspecialchars($row['name']); ?></h4>
                                    <p>Date: <?php echo htmlspecialchars($row['date']); ?></p>
                                    <p>Time: <?php echo htmlspecialchars($row['time']); ?></p>
                                    <p>Reason: <?php echo htmlspecialchars($row['message']); ?></p>
                                    <p>Phone: <?php echo htmlspecialchars($row['phone']); ?></p>
                                    <div class="appointment-actions">
                                        <a href="viewdetails.php?name=<?php echo urlencode($row['name']); ?>&date=<?php echo urlencode($row['date']); ?>&time=<?php echo urlencode($row['time']); ?>&message=<?php echo urlencode($row['message']); ?>&phone=<?php echo urlencode($row['phone']); ?>" class="btn btn-primary">View Details</a>
                                        <a href="#" class="btn btn-outline-primary">Schedule</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No appointments found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
