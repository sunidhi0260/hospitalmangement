<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swasth Aayush !</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: url(hsptl.jpg);
      background-color: #f0f0f0;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      min-height: 100vh;
    }

    .header {
      background-color: #ffffff;
      padding: 10px 20px;
      color: #5f00f5;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header a {
      color: #5f00f5;
      text-decoration: none;
    }

    .cart-btn {
      font-size: 20px;
      color: #5f00f5;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 50px;
      border: 2px solid #5f00f5;
      transition: all 0.3s ease;
      margin-left: 10px;
    }

    .cart-btn:hover {
      background-color: #5f00f5;
      color: #ffffff;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .content {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .content h1 {
      margin-top: 0;
      color: #5f00f5;
      font-size: 36px;
      margin-bottom: 20px;
    }

    .card {
      background-color: #ffffff;
      padding: 30px;
      margin-bottom: 30px;
      border-radius: 20px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
    }

    .card i {
      font-size: 60px;
      color: #5f00f5;
      margin-bottom: 20px;
    }

    .card h3 {
      margin-top: 0;
      color: #5f00f5;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .card a {
      color: #5f00f5;
      text-decoration: none;
      font-size: 18px;
      padding: 10px 20px;
      border-radius: 50px;
      border: 2px solid #5f00f5;
      transition: all 0.3s ease;
    }

    .card a:hover {
      background-color: #5f00f5;
      color: #ffffff;
    }

    .footer {
      text-align: center;
      padding: 10px 0;
      background-color: rgba(255, 255, 255, 0.8);
      position: fixed;
      bottom: 0;
      width: 100%;
      border-top: 2px solid #5f00f5;
    }
  </style>
</head>
<body>
  <div class="header">
    <div>
      <i class="fas fa-user-md"></i> Swasth Aayush
    </div>
    <div>
      <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> My Cart</a>
      <a href="frontpage.php" class="cart-btn">Back</a>
    </div>
  </div>
  <div class="container">
    <div class="content">
      <h1>Welcome To Patient Portal</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <i class="far fa-calendar-alt"></i>
            <h3>Schedule Appointment</h3>
            <a href="schedulenow.php" class="btn btn-primary">Schedule Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <i class="far fa-list-alt"></i>
            <h3>View My Appointments</h3>
            <a href="view-appointments.php" class="btn btn-primary">View Appointments</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <i class="fas fa-prescription-bottle-alt"></i>
            <h3>My Prescriptions</h3>
            <a href="patient-prescriptions.php" class="btn btn-primary">Prescriptions</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    &copy; 2023 Swasth Aayush
  </div>
</body>
</html>
