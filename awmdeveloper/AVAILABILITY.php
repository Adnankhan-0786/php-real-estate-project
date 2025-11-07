<?php 
	include_once ('header.php');
	?> 

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex text-center align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<p class="text-white link-nav"><a href="index.html">Home </a>
						<span class="lnr lnr-arrow-right"></span> <a href="	Availability.php">
						Availability</a></p>
					<h1 class="text-white">
					Availability
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- Start of availiblity -->

	<style>
        /* Styling for spacing */
        .dropdown-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 40px;
            padding: 40px;
			margin: 0px 0px 0px 0px ;
			color: #ea6c5d;;
			font-size: 1.2rem;
			
        }

        .form-group {
            text-align: center;
        }

        /* Responsive for smaller screens */
        @media (max-width: 768px) {
            .dropdown-container {
                flex-direction: column;
                align-items: center;
            }

            .form-group {
                width: 80%;
            }
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="dropdown-container">
        <!-- Project Dropdown -->
        <div class="form-group">
            <label for="project">Project</label>
            <select class="form-select" id="project">
                <option selected>Select Project</option>
                <option>Project A</option>
                <option>Project B</option>
                <option>Project C</option>
                <option>Project D</option>
                <option>Project E</option>
                <option>Project F</option>
            </select>
        </div>

        <!-- Area Dropdown -->
        <div class="form-group">
            <label for="area">Area</label>
            <select class="form-select" id="area">
                <option selected>Select Area</option>
                <option>Area 1</option>
                <option>Area 2</option>
                <option>Area 3</option>
                <option>Area 4</option>
                <option>Area 5</option>
                <option>Area 6</option>
            </select>
        </div>

        <!-- Block Dropdown -->
        <div class="form-group">
            <label for="block">Block</label>
            <select class="form-select" id="block">
                <option selected>Select Block</option>
                <option>Block A</option>
                <option>Block B</option>
                <option>Block C</option>
                <option>Block D</option>
                <option>Block E</option>
                <option>Block F</option>
            </select>
        </div>

        <!-- Status Dropdown -->
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-select" id="status">
                <option selected>Select Status</option>
                <option>Available</option>
                <option>Sold</option>
                <option>Pending</option>
                <option>Under Construction</option>
                <option>Completed</option>
                <option>Not Available</option>
            </select>
        </div>
    </div>
</div>



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








	<!-- end of availib,ity -->

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