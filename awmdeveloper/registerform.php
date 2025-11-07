    
	<!-- End Header Area -->
	<?php 
	include_once ('header.php');
	?> 
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sign In</title>
    <style>
        /* Centering the form */
        .login-container {
            width: 450px;
            margin: 120px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        /* Sign in heading */
        .login-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            transition: color 0.3s ease-in-out;
        }

        /* Hover effect on Sign in */
        .login-title:hover {
            color: #ea6c5d;
        }

        /* Styling inputs */
        .login-input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Checkbox and Forgot password */
        .login-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            margin: 10px 0;
        }

        /* Styling the login button */
        .login-btn {
            width: 100%;
            background-color: black;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 12px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 3px;
        }

        /* Hover effect on Login button */
        .login-btn:hover {
            background-color: #ea6c5d;
        }

        /* Sign up link */
        .signup {
            margin-top: 15px;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .login-container {
                width: 90%;
                margin: 80px auto;
            }
        }

        @media (max-width: 400px) {
            .login-container {
                width: 100%;
                padding: 15px;
            }
            .login-title {
                font-size: 20px;
            }
            .login-input {
                font-size: 14px;
            }
            .login-btn {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-title">REGISTER</div>
        <input type="text" class="login-input" placeholder="Introducer Id" required>
        <input type="password" class="login-input" placeholder="Intro-Id">
        <input type="text" class="login-input" placeholder="Your Name">
        <input type="password" class="login-input" placeholder="Mobile No" required>
        <input type="text" class="login-input" placeholder="PAN" required>
        
        <div class="login-options">
            <label><input type="checkbox"> Remember</label>
            <a href="#" style="color: #007bff; text-decoration: none;">Forgot password?</a>
        </div>

        <button class="login-btn">LOGIN</button>

        <div class="signup">
            Don't have an account? <a href="#" style="color: #007bff; text-decoration: none;">REGISTER</a>
        </div>
    </div>

</body>
</html>


	<?php 
	include_once ('footer.php');
	?> 
	

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