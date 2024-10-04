<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Hospital Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f2f2f2; /* Light gray background */
        }

        .header {
            background-color: #5f00f5;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
        }

        .cart-icon {
            font-size: 24px;
        }

        .cart-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        .cart-item {
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .cart-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .cart-item img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .quantity {
            width: 50px;
            text-align: center;
        }

        .btn-quantity {
            width: 30px;
            height: 30px;
            font-size: 16px;
        }

        .price {
            font-weight: bold;
            color: #007bff;
        }

        #totalPrice {
            font-size: 1.2em;
            font-weight: bold;
            color: #007bff;
        }

        .make-payment-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        
        <a href="patient-portal.php" class="text-white"> Back</a>
    </div>
    <div class="container">
        <div class="cart-container">
            <h2 class="text-center mb-4">Your Cart</h2>
            <!-- Cart Items -->
            <!-- Cart Item 1 -->
            <div class="cart-item">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/medicine1.jpg" alt="Medicine 1" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <h3>Medicine 1</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary btn-quantity" type="button" id="subtract1">-</button>
                            </div>
                            <input type="text" class="form-control text-center quantity" value="1" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-quantity" type="button" id="add1">+</button>
                            </div>
                        </div>
                        <p class="text-center mt-2">Rs<span class="price">200.00</span></p>
                    </div>
                </div>
            </div>
            <!-- End Cart Item 1 -->
            <!-- Cart Item 2 -->
            <div class="cart-item">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/medicine2.jpg" alt="Medicine 2" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <h3>Medicine 2</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary btn-quantity" type="button" id="subtract2">-</button>
                            </div>
                            <input type="text" class="form-control text-center quantity" value="1" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-quantity" type="button" id="add2">+</button>
                            </div>
                        </div>
                        <p class="text-center mt-2">Rs<span class="price">150.00</span></p>
                    </div>
                </div>
            </div>
            <!-- End Cart Item 2 -->
            <!-- Cart Item 3 -->
            <div class="cart-item">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/medicine3.jpg" alt="Medicine 3" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <h3>Medicine 3</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary btn-quantity" type="button" id="subtract3">-</button>
                            </div>
                            <input type="text" class="form-control text-center quantity" value="1" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-quantity" type="button" id="add3">+</button>
                            </div>
                        </div>
                        <p class="text-center mt-2">Rs<span class="price">180.00</span></p>
                    </div>
                </div>
            </div>
            <!-- End Cart Item 3 -->
            <!-- Total Price -->
            <div class="text-right">
                <h4>Total: Rs <span id="totalPrice">0.00</span></h4>
            </div>
            <!-- End Total Price -->
            <!-- Make Payment Button -->
            <button class="btn btn-primary btn-block make-payment-btn" onclick="window.location.href='payment.php'">Make Payment</button>
            <!-- End Make Payment Button -->
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add quantity for item 1
            $('#add1').click(function() {
                var quantity = parseInt($('.quantity').eq(0).val());
                $('.quantity').eq(0).val(quantity + 1);
                updateTotalPrice();
            });

            // Subtract quantity for item 1
            $('#subtract1').click(function() {
                var quantity = parseInt($('.quantity').eq(0).val());
                if (quantity > 1) {
                    $('.quantity').eq(0).val(quantity - 1);
                    updateTotalPrice();
                }
            });

            // Add quantity for item 2
            $('#add2').click(function() {
                var quantity = parseInt($('.quantity').eq(1).val());
                $('.quantity').eq(1).val(quantity + 1);
                updateTotalPrice();
            });

            // Subtract quantity for item 2
            $('#subtract2').click(function() {
                var quantity = parseInt($('.quantity').eq(1).val());
                if (quantity > 1) {
                    $('.quantity').eq(1).val(quantity - 1);
                    updateTotalPrice();
                }
            });

            // Add quantity for item 3
            $('#add3').click(function() {
                var quantity = parseInt($('.quantity').eq(2).val());
                $('.quantity').eq(2).val(quantity + 1);
                updateTotalPrice();
            });

            // Subtract quantity for item 3
            $('#subtract3').click(function() {
                var quantity = parseInt($('.quantity').eq(2).val());
                if (quantity > 1) {
                    $('.quantity').eq(2).val(quantity - 1);
                    updateTotalPrice();
                }
            });

            // Update total price
            function updateTotalPrice() {
                var totalPrice = 0;
                $('.cart-item').each(function() {
                    var quantity = parseInt($(this).find('.quantity').val());
                    var price = parseFloat($(this).find('.price').text());
                    totalPrice += quantity * price;
                });
                $('#totalPrice').text(totalPrice.toFixed(2));
            }
        });
    </script>
</body>
</html>

