<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make an Appointment</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('https://source.unsplash.com/1600x900/?hospital') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      position: relative;
    }
    
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .navbar {
      position: fixed;
      top: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 10px 20px;
      border-radius: 0 0 0 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .navbar a {
      color: #5f00f5;
      text-decoration: none;
      font-size: 16px;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 4px;
      border: 2px solid #5f00f5;
      transition: all 0.3s ease;
    }

    .navbar a:hover {
      background-color: #5f00f5;
      color: #fff;
    }

    .container {
      max-width: 600px;
      margin: 80px auto;
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      position: relative;
      z-index: 100;
    }
    
    h1 {
      color: #5f00f5;
      text-align: center;
    }
    
    form {
      margin-top: 20px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }
    
    input[type="text"], input[type="number"], select, textarea {
      width: calc(100% - 22px);
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }
    
    input[type="submit"] {
      background-color: #5f00f5;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    
    input[type="submit"]:hover {
      background-color: #4100a8;
    }
    
    textarea {
      width: calc(100% - 22px);
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
      resize: vertical;
    }
    
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="overlay"></div>
  <div class="navbar">
    <a href="patient-portal.php"><i class="fas fa-arrow-left"></i> Back</a>
  </div>
  <div class="container">
    <h1>Make an Appointment</h1>
    <form action="make_appointment.php" method="POST">
      <div class="form-group">
        <label for="name">Patient Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
      </div>
      
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
      </div>
      
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="">Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="doctor">Select Doctor:</label>
        <select id="doctor" name="doctor" required>
          <option value="">Select a doctor</option>
          <option value="Dr. Smith">Dr. Kartheek</option>
          <option value="Dr. Johnson">Dr. Pavan</option>
          <option value="Dr. Brown">Dr. Suresh</option>
        </select>
      </div>

      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>

      <div class="form-group">
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
      </div>
      
      <div class="form-group">
        <label for="message">Describe your problem:</label>
        <textarea id="message" name="message" rows="4"></textarea>
      </div>
      
      <div class="form-group">
        <input type="submit" value="Submit Appointment Request">
      </div>
    </form>
  </div>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
