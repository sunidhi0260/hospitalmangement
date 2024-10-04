<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url(images/admin-background.jpg); /* Change the background image */
      background-size: cover;
      background-position: center;
      background-color: rgba(255, 255, 255, 0.5); /* Lighten the background */
    }
    .container {
      max-width: 500px;
      margin: 100px auto;
      background-color: rgba(255, 255, 255, 0.8); /* Lighten the container background */
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
    .form-group {
      margin-bottom: 25px;
    }
    .btn-login {
      background-color: #007bff; /* Change the button color */
      color: #fff;
      border: none;
    }
    .btn-login:hover {
      background-color: #0056b3; /* Change the button hover color */
    }
    .form-heading {
      font-size: 28px;
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }
    .form-control {
      border-radius: 20px;
    }
    .btn-link {
      font-size: 16px;
      color: #007bff;
      text-decoration: none;
    }
    .btn-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Admin Login -->
    <div id="admin" class="tab-pane fade show active">
      <h3 class="form-heading">Admin Login</h3>
      <form onsubmit="return validateLogin()">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" id="username" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" id="password" required>
        </div>
        <button type="submit" class="btn btn-login btn-block">Login</button> <!-- Change the button type to submit -->
      </form>
      
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    function validateLogin() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      
      // Check if username and password match
      if (username === "admin123" && password === "123") {
        // Redirect to admin.html if login is successful
        window.location.href = "admin.php";
        return false; // Prevent form submission
      } else {
        // Display error message or handle invalid login
        alert("Invalid username or password. Please try again.");
        return false; // Prevent form submission
      }
    }
  </script>
</body>
</html>
