<!DOCTYPE html>
<html lang="en">
<head>
    <title> Gallery </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include "header.php"; ?>
    <style>
.gallery-item{overflow:hidden;position:relative}.gallery-item img{width:100%;transition:transform .3s ease;height:290px}.gallery-item:hover img{transform:scale(1.1)}.caption{position:absolute;bottom:0;background:rgba(0,0,0,0.7);color:#fff;width:100%;padding:10px;text-align:center;display:flex;align-items:center;justify-content:center;gap:10px}.caption a{color:#fff;text-decoration:none}.caption a:hover{color:#ddd}
    </style>
</head>
<body>
<?php include "nav.php"; ?>
        <!-- Section for Features -->
    <div class="container-fluid">
        <h2 class="text-center mb-4 animate-title">Beautiful memories at Kindergarten </h2>
        <div class="row g-5">
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Gallery1.jpg" >
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Gallery2.jpg" >
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Gallery3.jpg">
    </div>
  </div>
</div>

<div class="row g-5">
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Gallery4.jpg">
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Gallery5.jpg">
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Gallery.jpg" style="object-fit:cover;">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Gallery1.jpeg" style="object-fit:cover;">
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Gallery.jpeg" >
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/Home.jpg" style="object-fit:cover;">
    </div>
  </div>




<div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery10.jpg" >
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery11.jpg" >
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery13.jpg">
    </div>
  </div>
</div>

<div class="row g-5">
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery14.jpg">
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery15.jpg">
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery12.jpg" style="object-fit:cover;">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery16.jpg" style="object-fit:cover;">
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery17.jpg" >
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="gallery-item">
      <img src="images/gallery18.jpg" style="object-fit:cover;">
    </div>
  </div>
</div>






</div>

</div>
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
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"> </script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>

        <script>
            const cards = document.querySelectorAll('.animate-card');
            const historySection = document.querySelector('.animate-history');
    
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    } else {
                        entry.target.classList.remove('visible');
                    }
                });
            }, {
                threshold: 0.2
            });
    
            cards.forEach(card => {
                observer.observe(card);
            });
    
            // Observe history section
            observer.observe(historySection);
        </script>
    
</body>
</html>