<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include "header.php"; ?>

  <style>


    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .content-section {
      padding: 30px;
    }
    .section-title {
      font-weight: bold;
      font-size: 28px;
      text-transform: uppercase;
      color: #343a40;
      margin-bottom: 20px;
    }
    .info-box {
      border: 1px solid #ddd;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .highlight-box {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #007bff;
      color: white;
      padding: 20px;
      margin: 20px 0;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
   
    .list-item {
      margin-bottom: 8px;
    }
    .uniform-text {
      font-style: italic;
      color: #555;
    }
    
		.admission-container {
    position: absolute; /* Position it absolutely */
    top: 20px; /* Adjust the distance from the top */
    right: 15px; /* Adjust the distance from the right */
    z-index: 1000; /* Ensure it appears above other elements */
}

.img-fluid {
    width: 100%; /* Ensure the image is responsive */
    height: auto; /* Maintain aspect ratio */
}

  </style>
</head>
<body> 
<?php include "nav.php"; ?>
   <!-- END nav -->
  <div class="container content-section">
    <!-- Admission Procedure -->
    <div class="mb-5">
      <h1 class="section-title" style="text-align: center;">Admission</h1>
      <h2 class="mt-3">Admission Procedure</h2>
      <p>The student name will be registered for admission on completion of the registration form. Admission for Play Group to UKG will be through a first-come, first-serve basis.</p>
    </div>

    <!-- Highlight Section -->
    <div class="highlight-box" style="background-color: rgb(112, 112, 177); display: flex; align-items: center; justify-content: space-between; padding: 20px;">
      <!-- Image Section -->
       <div class="row">
        <div class="col-md-6 col-sm-6">
        <img src="images/abc.jpg" class="img-fluid" alt="Highlight Image" style=" border-radius: 8px;">
    
        </div>
        <div class="col-md-6 col-sm-6">
        <div style=" color: white; padding-left: 20px;">
        <h3 style="font-size: 1.5rem; font-weight: bold;">Mandatory Instructions for Admission</h3>
        <p style="font-size: 1rem; line-height: 2.6;">
          1. Submission of the registration form is mandatory.<br>
          2. Provide all necessary documents (e.g., birth certificate, Aadhar card).<br>
          3. Ensure timely submission of fees for confirmation.<br>
          4. Attend the orientation program for parents and students.<br>
          5. Complete the health and medical form with accurate details for the student's well-being.
        </p>
      </div>
        </div>
        
       </div>
      
      <!-- Text Section -->
      
    </div>
    

    <!-- Documents and Timings -->
    <div class="row mb-5">
      <div class="col-md-6">
        <div class="info-box">
          <h3>Documents required (Play Group to 5<sup>th</sup>)</h3>
          <ul>
            <li class="list-item">Two passport/stamp size photographs of the student</li>
            <li class="list-item">A photocopy of the birth certificate of the student</li>
            <li class="list-item">Two passport size photographs of parents</li>
            <li class="list-item">Photocopy of the Aadhar Card of student & parents</li>
            <li class="list-item">Family ID</li>
          </ul>
        </div>
      </div>

      <!-- School Timings -->
      <div class="col-md-6">
        <div class="info-box">
          <h3>School Timings</h3>
          <ul>
            <li class="list-item">Pre Nursery & Nursery: 8:15am to 12:00 noon</li>
            <li class="list-item">LKG to 2<sup>nd</sup>: 8:15am to 1:00pm</li>
            <li class="list-item">3<sup>rd</sup> to 5<sup>th</sup>: 8:15am to 2:00pm</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- School Uniform -->
    <div class="info-box">
      <h3>School Uniform (Both summers and winters)</h3>
      <p class="uniform-text">
        The specially designed colorful uniform is recommended. This tradition contributes to a strong sense of community at the school with an added benefit of uniformity, ensuring a neat and well-groomed child.
      </p>
    </div>
  </div>
  <!-- ------footer------ -->
  <?php include "footer.php";?>
  

  <script src="bootstrap.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html> 