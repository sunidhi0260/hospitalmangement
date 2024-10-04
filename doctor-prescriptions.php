<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Prescription Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(room1.jpg); 
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        h2 {
            color: #5f00f5;
        }

        .form-group label {
            color: #5f00f5;
        }

        .form-control {
            border-radius: 0.75rem;
        }

        .btn-primary, .btn-success {
            background-color: #5f00f5;
            border-color: #5f00f5;
        }

        .btn-primary:hover, .btn-success:hover {
            background-color: #4300a6;
            border-color: #4300a6;
        }

        .list-group-item {
            background-color: #ffffff;
            border-color: #5f00f5;
            color: #5f00f5;
            border-radius: 0.75rem;
            margin-top: 10px;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #5f00f5;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-btn:hover {
            background-color: #4300a6;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="doctor.php" class="back-btn">Back</a>
    <h2 class="text-center">Doctor's Prescription Page</h2>
    <form id="prescriptionForm">
        <div class="form-group">
            <label for="medicineName">Medicine Name:</label>
            <input type="text" class="form-control" id="medicineName" required>
        </div>
        <div class="form-group">
            <label for="dosage">When to take:</label>
            <input type="text" class="form-control" id="dosage" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="duration" required>
        </div>
        <button type="submit" class="btn btn-primary">Add to Patient's Prescription</button>
    </form>
    <hr>
    <h3>Prescription:</h3>
    <ul id="prescriptionList" class="list-group"></ul>
    <button class="btn btn-success mt-3" id="sendPrescription">Send to Patient's Cart</button>
</div>

<script>
    document.getElementById('prescriptionForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const medicineName = document.getElementById('medicineName').value;
        const dosage = document.getElementById('dosage').value;
        const duration = document.getElementById('duration').value;

        const prescriptionList = document.getElementById('prescriptionList');
        const li = document.createElement('li');
        li.className = 'list-group-item';
        li.textContent = `${medicineName} - ${dosage} - ${duration}`;
        prescriptionList.appendChild(li);

        document.getElementById('prescriptionForm').reset();
    });

    document.getElementById('sendPrescription').addEventListener('click', function() {
        const prescriptionItems = document.querySelectorAll('#prescriptionList li');
        const prescriptionData = [];
        prescriptionItems.forEach(item => {
            prescriptionData.push(item.textContent);
        });

        localStorage.setItem('prescriptionData', JSON.stringify(prescriptionData));
        alert('Prescription sent to patient\'s cart!');
    });
</script>

</body>
</html>