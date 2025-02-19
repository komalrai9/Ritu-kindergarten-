<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> About Us </title>
    
    <!-- Include Google Fonts and Bootstrap -->
    <?php include "header.php"; ?>
    <style>
        /* Initial Card Visibility */
        .animate-card, .animate-history {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease, transform 1s ease; /* Slower animation */
        }

        /* Visibility class to make cards visible when they appear */
        .visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Fade-out effect when scrolled out of view */
        .fade-out {
            opacity: 0;
            transform: translateY(-50px);
        }

        /* Image styling */
        .featured-image {
            width: 100%;
            height: auto; /* Maintain aspect ratio */
        }

    </style>


</head>

<body>
<?php include "nav.php"; ?>
    <!-- New Image after Navbar -->
    <div class="container-fluid my-5">
        <img src="images/abc.jpg" alt="Featured Image" class="featured-image">
    </div>

    <!-- Section for Features -->
    <div class="container my-5">
        <h2 class="text-center mb-4 animate-title">Why Choose Ritu Kindergarten School?</h2>
        <div class="row gy-4">
            <div class="col-md-6">
                <div class="card animate-card">
                    <img src="images/about1.jpg" style="height: 270px;" class="card-img-top" alt="Play-Based Learning">
                    <div class="card-body">
                        <h5 class="card-title">Play-Based Learning</h5>
                        <p class="card-text">We believe in stress and burden-free education. 
                            To make the teaching more fun-loving and interesting, 
                            we give more emphasis on play-based learning.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card animate-card">
                    <img src="images/about.jpg" style="height: 250px; object-fit: cover;" class="card-img-top" alt="Stage Exposure">
                    <div class="card-body">
                        <h5 class="card-title">Stage Exposure</h5>
                        <p class="card-text">We at Ritu Kindergarten are giving lots of emphasis on
                            stage activities like Mike Activities, Public Speaking, Circle Talk, 
                            and Stand on Mike to remove hesitation and stage fear and boost the
                            confidence level in the child.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card animate-card">
                    <img src="images/PTM.jpg" class="card-img-top" alt="P.T.M">
                    <div class="card-body">
                        <h5 class="card-title">P.T.M</h5>
                        <p class="card-text">Parent Teacher Meeting strengthens the bond between the teachers 
                            and the parents and helps us work in a similar direction for the welfare of the 
                            students. P.T.M. is organized on a monthly basis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card animate-card">
                    <img src="images/Gallery1.jpg" style="height: 320px; object-fit: cover;" class="card-img-top" alt="Multi-Purpose Activity Hall">
                    <div class="card-body">
                        <h5 class="card-title">Multi-Purpose Activity Hall</h5>
                        <p class="card-text">This is another prominent feature of the school. 
							It is very colourful and attractive. It is equipped with swings, toys,
							 scooters, innovative puzzles, and a smart board.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">

        <!-- History Section -->
        <div class="history-section animate-history">
            <h2 class="text-center mb-4">History of the School</h2>
            <p>The <strong>Ritu Kindergarten School</strong> was laid down in the year of 2018 founded by <strong>Ritu Gangal (M.Com, B.Ed)</strong>. Ritu Gangal is a social worker as she helps and educates poor kids. The foundation was started with the objective to provide quality learning to kids in a stress-free and burden-free environment, which will help in the holistic growth of the child. The school has climbed the ladder of success year by year with lots of hard work, dedication of the school fraternity, and the management.</p>
            <p><em>But there is miles to go beyond...</em></p>
            <p>We ensure to provide a safe, secure, healthy, and spacious environment to our kids. We at Ritu Kindergarten School leave no stones unturned to create a homely and child-friendly atmosphere within our premises. This is an added feature to instill quality learning amongst the kids.</p>
        </div>
    </div>

    <!-- Intersection Observer Script for Scroll Animations -->
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

</body>
</html>