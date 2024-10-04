<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Appointments - Swasth Aayush</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #9cecfb, #65c7f7, #0052d4);
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
      margin-left: 15px;
    }

    .container {
      padding: 20px;
    }

    .content {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .content h1 {
      margin-top: 0;
      color: #5f00f5;
      font-size: 36px;
      margin-bottom: 20px;
    }

    .section-title {
      color: #5f00f5;
      font-size: 28px;
      margin-bottom: 20px;
      border-bottom: 2px solid #5f00f5;
      padding-bottom: 10px;
    }

    .calendar {
      margin-bottom: 40px;
    }

    .appointment-list {
      max-height: 400px;
      overflow-y: auto;
      padding-right: 20px;
    }

    .appointment-item {
      background-color: #ffffff;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: all 0.3s ease;
    }

    .appointment-item:hover {
      transform: translateY(-5px);
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    }

    .appointment-item i {
      font-size: 24px;
      color: #5f00f5;
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
      <a href="patient-portal.php" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i> Back</a>
      <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> My Cart</a>
    </div>
  </div>
  <div class="container">
    <div class="content">
      <h1>My Appointments</h1>
      <div id="calendar" class="calendar mb-4"></div>

      <div class="section-title">Upcoming Appointments</div>
      <div class="appointment-list mb-4">
        <div class="appointment-item">
          <div>
            <h5>Appointment with Dr. Smith</h5>
            <p><i class="far fa-clock"></i> June 15, 2024, 10:00 AM</p>
          </div>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="appointment-item">
          <div>
            <h5>Appointment with Dr. Johnson</h5>
            <p><i class="far fa-clock"></i> June 20, 2024, 2:00 PM</p>
          </div>
          <i class="fas fa-chevron-right"></i>
        </div>
        <!-- Add more upcoming appointments as needed -->
      </div>

      <div class="section-title">Completed Appointments</div>
      <div class="appointment-list">
        <div class="appointment-item">
          <div>
            <h5>Appointment with Dr. Brown</h5>
            <p><i class="far fa-clock"></i> May 25, 2024, 11:00 AM</p>
          </div>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="appointment-item">
          <div>
            <h5>Appointment with Dr. Green</h5>
            <p><i class="far fa-clock"></i> May 10, 2024, 3:00 PM</p>
          </div>
          <i class="fas fa-chevron-right"></i>
        </div>
        <!-- Add more completed appointments as needed -->
      </div>
    </div>
  </div>
  <div class="footer">
    &copy; 2023 Swasth Aayush
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        events: [
          {
            title: 'Appointment with Dr. Smith',
            start: '2024-06-15T10:00:00'
          },
          {
            title: 'Appointment with Dr. Johnson',
            start: '2024-06-20T14:00:00'
          },
          {
            title: 'Appointment with Dr. Brown',
            start: '2024-05-25T11:00:00'
          },
          {
            title: 'Appointment with Dr. Green',
            start: '2024-05-10T15:00:00'
          }
          // Add more events as needed
        ]
      });
    });
  </script>
</body>
</html>
