<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include "header.php"; ?>
  <style>
    /* Initial state for animation */
    .animate-element {
      opacity: 0;
      transform: translateY(30px);
      /* Element starts slightly lower */
      transition: opacity 0.6s ease, transform 0.6s ease;
      /* Smooth transition */
    }

    /* When element becomes visible */
    .visible {
      opacity: 1;
      transform: translateY(0);
      /* Moves to original position */
    }
    
	
  </style>

</head>

<body>
<?php include "nav.php"; ?>
  <!-- END nav -->

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-4 col-sm-4  d-flex animate-element">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Address</h3>
            <p>Street 2, Near Maata Mandir, Defence Colony, Bhondsi, Gurgaon, HR</p>
          </div>
        </div>
        <div class="col-md-4 d-flex animate-element">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Contact Number</h3>
            <p><a href="tel:9555716450">9555716450, 9899002827</a></p>
          </div>
        </div>
        <div class="col-md-4 d-flex animate-element">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Email Address</h3>
            <p><a href="mailto:info@ritukindergarten.in">info@ritukindergarten.in</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
      <div class="row d-flex align-items-stretch no-gutters">
        <div class="col-md-6 p-4 p-md-5 order-md-last bg-light animate-element">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7018.853427415703!2d77.08357532408393!3d28.34808510127648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3ba94ea3f971%3A0x3c6a607f6f2d7b94!2sStreet%202%2C%20Near%20Maata%20Mandir%2C%20Defence%20Colony%2C%20Bhondsi%2C%20Gurgaon%2C%20Haryana!5e0!3m2!1sen!2sin!4v1710699537987!5m2!1sen!2sin"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "footer.php";?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>
    
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
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const elements = document.querySelectorAll(".animate-element");
  
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // Add visible class when element is in view
            entry.target.classList.add("visible");
          } else {
            // Remove visible class when element is out of view
            entry.target.classList.remove("visible");
          }
        });
      }, {
        threshold: 0.2, // Trigger when 20% of the element is visible
      });
  
      elements.forEach((el) => observer.observe(el));
    });
  </script>
  

</body>

</html>