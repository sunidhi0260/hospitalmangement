<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMS</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <style>
    .form-control {
      border-radius: 0.75rem;
    }
    body {
      font-family: 'IBM Plex Sans', sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      position: relative;
    }
    .overlay {
      background-color: rgba(0, 0, 0, 0.6);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }
    .container {
      z-index: 2;
    }
    .register-left img {
      width: 100px;
    }
    .register-left {
      text-align: center;
      color: #fff;
    }
    .register-right {
      background: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
    }
    .nav-tabs {
      border-bottom: none;
    }
    .nav-tabs .nav-link.active {
      border-color: transparent;
      color: #4caf50;
      font-weight: bold;
    }
    .nav-tabs .nav-link {
      border: none;
      color: #333;
    }
    .btnRegister {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .btnRegister:hover {
      background-color: #45a049;
    }
    .register-heading {
      text-align: center;
      margin-bottom: 20px;
    }
    .background-patient {
      background-image: url('https://source.unsplash.com/1600x900/?hospital');
    }
    .background-doctor {
      background-image: url('https://source.unsplash.com/1600x900/?doctor');
    }
    .background-image {
      background-size: cover;
      background-position: center;
    }
    /* Add styles for Admin button */
    .admin-btn {
      position: fixed;
      bottom: 20px;
      left: 20px;
      z-index: 9999;
    }
  </style>
  <script>
    function showBackground(imageClass) {
      document.body.classList.remove('background-patient', 'background-doctor');
      document.body.classList.add(imageClass);
    }

    var check = function() {
      if (document.getElementById('password').value ==
        document.getElementById('cpassword').value) {
        document.getElementById('message').style.color = '#5dd05d';
        document.getElementById('message').innerHTML = 'Matched';
      } else {
        document.getElementById('message').style.color = '#f55252';
        document.getElementById('message').innerHTML = 'Not Matching';
      }
    }

    function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key == 8 || key == 32);
    };

    function checklen() {
      var pass1 = document.getElementById("password");
      if (pass1.value.length < 6) {
        alert("Password must be at least 6 characters long. Try again!");
        return false;
      }
      return true;
    }

    function handleRegister() {
      if (checklen()) {
        // Get form data
        var formData = {
          firstName: document.getElementById("fname").value,
          lastName: document.getElementById("lname").value,
          email: document.getElementById("email").value,
          phone: document.getElementById("contact").value,
          gender: document.querySelector('input[name="gender"]:checked').value,
          role: "Patient"
        };

        // Send form data to admin page (you can use AJAX here)
        // For demonstration purpose, let's log the data to console
        console.log(formData);

        // Redirect to frontpage.html
        window.location.href = 'frontpage.php';
        
        return false; // Prevent form submission
      }
      return false; // Prevent form submission if validation fails
    }

    function handleDoctorLogin() {
      // Get form data
      var formData = {
        username: document.getElementById("username3").value,
        password: document.getElementById("password3").value,
        role: "Doctor"
      };

      // Send form data to admin page (you can use AJAX here)
      // For demonstration purpose, let's log the data to console
      console.log(formData);

      // Redirect to doctor.html
      window.location.href = 'doctor.php';
      
      return false; // Prevent form submission
    }
  </script>
</head>
<body class="background-patient background-image">
  <div class="overlay"></div>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;"></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container register">
    <div class="row">
      <div class="col-md-3 register-left" style="margin-top: 10%; right: 5%">
        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
      </div>
      <div class="col-md-9 register-right" style="margin-top: 40px;">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 100%;">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" onclick="showBackground('background-patient')">Patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" onclick="showBackground('background-doctor')">Doctor</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Register as Patient</h3>
            <form onsubmit="return handleRegister();">
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name *" name="fname" id="fname" onkeydown="return alphaOnly(event);" required />
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" />
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup="check();" required />
                  </div>
                  <div class="form-group">
                    <div class="maxl">
                      <label class="radio inline">
                        <input type="radio" name="gender" value="Male" checked>
                        <span> Male </span>
                      </label>
                      <label class="radio inline">
                        <input type="radio" name="gender" value="Female">
                        <span>Female </span>
                      </label>
                    </div>
                    <a href="patient-login.php">Already have an account?</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name *" name="lname" id="lname" onkeydown="return alphaOnly(event);" required />
                  </div>
                  <div class="form-group">
                    <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *" id="contact" />
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password *" name="cpassword" onkeyup="check();" required />
                    <span id="message"></span>
                  </div>
                  <input type="submit" class="btnRegister" value="Register" />
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h3 class="register-heading">Login as Doctor</h3>
            <form onsubmit="return handleDoctorLogin();">
              <div class="row register-form">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="User Name *" name="username3" id="username3" onkeydown="return alphaOnly(event);" required />
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" name="password3" id="password3" required />
                  </div>
                  <input type="submit" class="btnRegister" value="Login as Doctor" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Admin button -->
  <button type="button" class="btn btn-info admin-btn" onclick="window.location.href='adminlogin.php'">Admin</button>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

