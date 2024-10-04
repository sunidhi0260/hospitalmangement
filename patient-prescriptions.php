<!DOCTYPE html>
<html>
<head>
    <title>My Prescriptions - Swasth Aayush</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://source.unsplash.com/1600x900/?hospital') no-repeat center center fixed;
            background-size: cover;
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

        .prescription-list {
            max-height: 400px;
            overflow-y: auto;
            padding-right: 20px;
        }

        .prescription-item {
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .prescription-item:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .prescription-item h5 {
            margin: 0;
            font-size: 18px;
            color: #333333;
        }

        .prescription-item p {
            margin: 5px 0 0 0;
            font-size: 14px;
            color: #666666;
        }

        .prescription-item .details {
            flex: 1;
        }

        .prescription-item .actions {
            text-align: right;
        }

        .prescription-item .actions a {
            color: #5f00f5;
            text-decoration: none;
            font-size: 18px;
            padding: 5px 10px;
            border-radius: 50px;
            border: 2px solid #5f00f5;
            transition: all 0.3s ease;
        }

        .prescription-item .actions a:hover {
            background-color: #5f00f5;
            color: #ffffff;
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
      <a href="patient-portal.php">Back</a>
      <a href="view-appointments.php" class="ml-3">View Appointments</a>
    </div>
  </div>
  <div class="container">
    <div class="content">
        <h1>My Prescriptions</h1>
        
        <div class="section-title">Active Prescriptions</div>
        <div class="prescription-list mb-4">
          <!-- Active prescriptions will be dynamically added here -->
        </div>
  
        <div class="section-title">Past Prescriptions</div>
        
        <div class="prescription-list">
          <div class="prescription-item">
            <div class="details">
              <h5>Amoxicillin</h5>
              <p><i class="fas fa-pills"></i> 500 mg, twice a day</p>
              <p><i class="fas fa-calendar"></i> Prescribed on: May 1, 2023</p>
            </div>
            <div class="actions">
              <a href="cart.php">Buy Now</a>
              <a href="#" class="ml-2">Details</a>
            </div>
          </div>
          <div class="prescription-item">
            <div class="details">
              <h5>Ibuprofen</h5>
              <p><i class="fas fa-pills"></i> 200 mg, three times a day</p>
              <p><i class="fas fa-calendar"></i> Prescribed on: April 15, 2023</p>
            </div>
            <div class="actions">
              <a href="cart.php">Buy Now</a>
              <a href="#" class="ml-2">Details</a>
            </div>
          </div>
          <div class="prescription-item">
            <div class="details">
              <h5>Metformin</h5>
              <p><i class="fas fa-pills"></i> 500 mg, once a day</p>
              <p><i class="fas fa-calendar"></i> Prescribed on: March 10, 2023</p>
            </div>
            <div class="actions">
              <a href="cart.php">Buy Now</a>
              <a href="#" class="ml-2">Details</a>
            </div>
          </div>
          <!-- Past prescriptions will be dynamically added here -->
        </div>
      </div>
    </div>
    <div class="footer">
      &copy; 2023 Swasth Aayush
    </div>
  
    <script>
      // Retrieve prescription data from local storage
      const prescriptionData = JSON.parse(localStorage.getItem('prescriptionData'));
      if (prescriptionData) {
        const activePrescriptionList = document.querySelector('.prescription-list.mb-4');
        const pastPrescriptionList = document.querySelector('.prescription-list:not(.mb-4)');
        
        // Create list items for each prescription
        prescriptionData.forEach(prescription => {
          const [medicineName, dosage, duration] = prescription.split(' - ');
  
          // Create prescription item
          const prescriptionItem = document.createElement('div');
          prescriptionItem.className = 'prescription-item';
          const prescriptionDetails = `
            <div class="details">
              <h5>${medicineName}</h5>
              <p><i class="fas fa-pills"></i> ${dosage}</p>
              <p><i class="fas fa-calendar"></i> Prescribed on: ${new Date().toLocaleDateString()}</p>
            </div>
            <div class="actions">
              <a href="cart.html">Buy Now</a>
              <a href="#" class="ml-2">Details</a>
            </div>
          `;
          prescriptionItem.innerHTML = prescriptionDetails;
  
          // Add to appropriate prescription list
          if (prescription.toLowerCase().includes('completed')) {
            pastPrescriptionList.appendChild(prescriptionItem);
          } else {
            activePrescriptionList.appendChild(prescriptionItem);
          }
        });
      }
    </script>
  
  </body>
  </html>