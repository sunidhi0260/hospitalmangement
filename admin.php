<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      padding-top: 50px;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
    }
    .card {
      margin-bottom: 20px;
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
    }
    .card-body {
      background-color: #fff;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        Welcome Admin!
      </div>
      <div class="card-body">
        <h5 class="card-title">Patient Usernames</h5>
        <ul id="patientUsernames" class="list-group">
          <!-- Usernames will be added here -->
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    // Retrieve existing usernames array from local storage or initialize an empty array
    var usernames = JSON.parse(localStorage.getItem('usernames')) || [];

    // Retrieve username from local storage
    var username = localStorage.getItem('username');

    // Add username to the array and update local storage
    if (username) {
      usernames.push(username);
      localStorage.setItem('usernames', JSON.stringify(usernames));
    }

    // Display all usernames on the admin page
    var patientUsernamesElement = document.getElementById('patientUsernames');
    if (usernames.length > 0) {
      usernames.forEach(function(username) {
        var li = document.createElement('li');
        li.className = 'list-group-item';
        li.textContent = username;
        patientUsernamesElement.appendChild(li);
      });
    } else {
      var li = document.createElement('li');
      li.className = 'list-group-item';
      li.textContent = 'No usernames available';
      patientUsernamesElement.appendChild(li);
    }
  </script>
</body>
</html>
