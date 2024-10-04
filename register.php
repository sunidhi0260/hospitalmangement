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
  <link rel="stylesheet" href="register.css">
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
        window.location.href = 'patient-portal.php';
        return false; // Prevent form submission
      }
      return false; // Prevent form submission if validation fails
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
            <form action="register_patient.php" method="POST">
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name *" name="fname" onkeydown="return alphaOnly(event);" required />
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Email *" name="email" required />
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
                    <a href="patient-login.html">Already have an account?</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required />
                  </div>
                  <div class="form-group">
                    <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *" required />
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password *" name="cpassword" onkeyup="check();" required />
                    <span id="message"></span>
                  </div>
                  <input type="submit" class="btnRegister" onclick="return handleRegister();" value="Register" />
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h3 class="register-heading">Login as Doctor</h3>
            <form action="login_doctor.php" method="post">
              <div class="row register-form">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required />
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" name="password3" required />
                  </div>
                  <input type="submit" class="btnRegister" value="Login" />
                </div>
              </div>
            </form>
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
