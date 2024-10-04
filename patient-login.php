<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url(images/1.jpg); /* Unsplash image URL */
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
      background-color: #28a745;
      color: #fff;
      border: none;
    }
    .btn-login:hover {
      background-color: #218838;
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
    <!-- Patient Login -->
    <div id="patient" class="tab-pane fade show active">
      <h3 class="form-heading" >Patient Login</h3>
      <form>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="button" class="btn btn-login btn-block" onclick="window.location.href='frontpage.php'">Login</button>
      </form>
      <div class="text-center mt-3">
        <a href="#" class="btn-link">Forgot password?</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
