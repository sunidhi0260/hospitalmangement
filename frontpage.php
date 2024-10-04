<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swasth Aayush Hospital</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .jumbotron {
            background: url('https://source.unsplash.com/1600x900/?hospital') no-repeat center center;
            background-size: cover;
            color: #fff;
            padding: 100px 0;
            margin-bottom: 0;
        }

        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .jumbotron p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .appointment-box {
            background-color: #17a2b8;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .appointment-box:hover {
            background-color: #138496;
        }

        .appointment-box h3 {
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .appointment-box i {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .services-section {
            padding: 50px 0;
            background-color: #fff;
        }

        .service-item {
            margin-bottom: 30px;
        }

        .service-item h3 {
            margin-bottom: 10px;
            font-size: 1.8rem;
            color: #17a2b8;
        }

        .service-item p {
            font-size: 1.2rem;
        }

        .contact-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .contact-section h2 {
            margin-bottom: 40px;
            font-size: 2.5rem;
            text-align: center;
        }

        .contact-info {
            margin-bottom: 30px;
        }

        .contact-info i {
            font-size: 2rem;
            margin-right: 20px;
        }

        .contact-info span {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Welcome to Swasth Aayush Hospital</h1>
    <p>Providing Quality Healthcare Services</p>
    <div class="appointment-box" onclick="location.href='patient-portal.php';">
        <i class="far fa-calendar-check"></i>
        <h3>Book Appointment</h3>
        <p>Click here to schedule your appointment</p>
    </div>
</div>

<div class="container services-section">
    <div class="row">
        <div class="col-md-4">
            <div class="service-item">
                <h3>Cardiology</h3>
                <p>Specialized in diagnosing and treating heart diseases.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-item">
                <h3>Orthopedics</h3>
                <p>Experts in treating musculoskeletal injuries and conditions.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-item">
                <h3>Neurology</h3>
                <p>Specialists in diagnosing and treating disorders of the nervous system.</p>
            </div>
        </div>
    </div>
</div>

<div class="container contact-section">
    <h2>Contact Us</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="contact-info">
                <i class="fas fa-map-marker-alt"></i>
                <span>123 Hospital Road, City, Country</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <span>+123 456 7890</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-info">
                <i class="fas fa-envelope"></i>
                <span>info@swasthaayush.com</span>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
