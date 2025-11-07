
	<!-- End footer Area -->

	<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .footer {
        background-color: #111;
        color: #fff;
        padding: 40px 80px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-section {
        flex: 1;
        min-width: 280px;
        margin-bottom: 20px;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .logo img {
        width: 150px; 
        height: auto;
    }

    .logo h2 {
        font-size: 20px;
        font-weight: bold;
        text-align: justify;
    }

    .desc {
        
  margin: 21px 98px 0px 0px;
  line-height: 2.6;
  text-align: justify
    }

    .read-more {
        
  display: inline-block;
  background-color: #ffc107;
  color: #000;
  padding: 8px 9px;
  text-decoration: none;
  font-weight: bold;
  border-radius: 5px;
  margin: 11px 0px 0px 0px;
    }

    .quick-links h3,
    .contact-info h3 {
        margin-bottom: 10px;
        border-bottom: 2px solid #ffc107;
        display: inline-block;
        padding-bottom: 5px;
		
    }
	

    .quick-links ul {
        list-style: none;
    }

    .quick-links ul li {
        margin: 8px 0;
    }

    .quick-links ul li a {
        color: #fff;
        text-decoration: none;
    }

    .contact-info p {
        margin: 18px 0;
		text-align: justify;
    }

    .contact-icons {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .contact-icons a {
        color: #fff;
        font-size: 24px;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    .contact-icons a:hover {
        color: #ffc107;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .footer {
            flex-direction: column;
            text-align: center;
            padding: 40px 20px;
        }

        .footer-section {
            flex: 1 1 100%;
        }

        .logo {
            justify-content: center;
        }

        .contact-icons {
            justify-content: center;
        }
    }
</style>
</head>
<body>

<footer class="footer">
    <div class="footer-section">
        <div class="logo">
            <img src="img/awmlogos.jpeg " alt="Company Logo"> 
           
        </div>
		
		
        <p class="desc">
		<h2 style="color: #fff;">A<span style="color: red;">V</span>M</h2>

            Client satisfaction is at the heart of everything we do.
            We listen to our clients, understand their needs, and tailor our solutions to exceed their expectations.
        </p>
        <a href="#" class="read-more">READ MORE</a>
    </div>

    <div class="footer-section quick-links">
        <h3 style="color: #fff;">Quick Links</h3>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="projects.php ">Projects</a></li>
            <li><a href="AVAILABILITY.php ">Availability</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="footer-section contact-info">
        <h3 style="color: #fff;">Contact Info</h3>
        <div class="contact-info">
    <p><i class="fa-solid fa-location-dot" style="color: red;"></i> ADA Colony, Naini, Prayagra,  Prayagraj, Uttar Pradesh,211008</p>
    <p><i class="fa-solid fa-envelope" style="color: white;"></i>    </p>
    <p><i class="fa-solid fa-phone"style="color: blue;"></i> +91 8707005286  ,+91 8736935895 , +91 700726239</p>   
</div>

        <div class="contact-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</footer>


	



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
    <!-- Font Awesome CDN for social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</body>

</html>