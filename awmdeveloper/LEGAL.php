
<?php 
	include_once ('header.php');
	?> 

    

	
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex text-center align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about.php">LEGAL</a></p>
					<h1 class="text-white">
						Agencies
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <!DOCTYPE html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Ensure spacing and alignment */
        .container-fluid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

     


        /* Card Styling */
        .card {
            width: 18rem;
            margin: 15px; /* Adds space between cards */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* Hover Effect */
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Cards */
        @media (max-width: 768px) {
            .container-fluid {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="card">
        <img src="img/document.jpg" class="card-img-top" alt="Document">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    
    <div class="card">
        <img src="   " class="card-img-top" alt="Placeholder">
        <div class="card-body">
            <p class="card-text"> <b style="font-size: large;"> </b></p>
        </div>
    </div>
    
    <div class="card">
        <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Placeholder">
        <div class="card-body">
            <p class="card-text">Some engaging text to make the card visually appealing and informative.</p>
        </div>
    </div>


<!-- Bootstrap JS (Optional for interactive components like modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


<style>
        * {
                margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .banner {
            position: relative;
            width: 100%;
            height: 300px;
            background: url('img/chit.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .banner-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .banner-content h1 {
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .banner-content p {
            font-size: 23px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="banner-content">
            <h1>Want to find your perfect home?</h1>
            <p>AVM land Developer. Ltd real estate consultancy does not charge any brokerage from their clients.</p>
        </div>
    </div>
</body>  





    <?php 
	include_once ('footer.php');
	?> 

   
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>