<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secure Payment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #5f00f5;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      color: #5f00f5;
    }

    input[type="text"], input[type="number"], input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus, input[type="number"]:focus, input[type="password"]:focus {
      outline: none;
      border-color: #5f00f5;
      box-shadow: 0 0 5px rgba(95, 0, 245, 0.5);
    }

    .btn-primary {
      background-color: #5f00f5;
      border-color: #5f00f5;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #4300a6;
      border-color: #4300a6;
    }

    .payment-summary {
      border-top: 2px solid #ccc;
      margin-top: 30px;
      padding-top: 20px;
    }

    .payment-summary h3 {
      margin-bottom: 20px;
      color: #5f00f5;
    }

    .payment-summary ul {
      list-style: none;
      padding: 0;
    }

    .payment-summary ul li {
      margin-bottom: 10px;
      color: #5f00f5;
    }

    .payment-summary ul li span {
      font-weight: bold;
      color: #000;
    }

    .payment-methods {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .payment-methods label {
      display: block;
      margin-right: 20px;
      cursor: pointer;
    }

    .payment-methods input[type="radio"] {
      display: none;
    }

    .payment-methods input[type="radio"] + img {
      width: 60px;
      height: 40px;
      transition: transform 0.3s ease;
    }

    .payment-methods input[type="radio"]:checked + img {
      transform: scale(1.2);
    }

    .credit-card {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 10px;
      margin-top: 30px;
    }

    .credit-card img {
      max-width: 100px;
      margin-bottom: 20px;
    }

    .credit-card input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s ease;
    }

    .credit-card input[type="text"]:focus {
      outline: none;
      border-color: #5f00f5;
      box-shadow: 0 0 5px rgba(95, 0, 245, 0.5);
    }

    .credit-card .row {
      margin-bottom: 15px;
    }

    .credit-card .row:last-child {
      margin-bottom: 0;
    }

    .credit-card .row label {
      font-weight: bold;
    }

    .credit-card .row input[type="text"] {
      width: calc(50% - 10px);
      margin-right: 20px;
    }

    .credit-card .row input[type="text"]:last-child {
      margin-right: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Secure Payment</h1>
    <form id="payment-form">
      <div class="form-group">
        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="card-number" required>
      </div>
      <div class="form-group">
        <label for="expiration-date">Expiration Date:</label>
        <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YYYY" required>
      </div>
      <div class="form-group">
        <label for="cvv">CVV:</label>
        <input type="password" id="cvv" name="cvv" required>
      </div>
      <div class="form-group">
        <label for="cardholder-name">Cardholder Name:</label>
        <input type="text" id="cardholder-name" name="cardholder-name" required>
      </div>
      <div class="payment-methods">
       
        <label>
          <input type="radio" name="payment-method" value="mastercard">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Mastercard_2019_logo.svg/1280px-Mastercard_2019_logo.svg.png" alt="Mastercard">
        </label>
        <label>
          <input type="radio" name="payment-method" value="paypal">
          <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" alt="PayPal">
        </label>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Pay Now</button>
  </form>

  <div class="payment-summary">
    <h3>Order Summary</h3>
    <ul>
      <li>Product: <span>Medicines</span></li>
      <li>Price: <span>Rs 500</span></li>
      <li>Total: <span>$500</span></li>
    </ul>
  </div>


</body>
</html>

