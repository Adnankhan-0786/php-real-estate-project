<style>

.main-menu .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: nowrap;
    padding: 10px 0;
}


.menutop-wrap {
    background-color: #fd7e14;
    padding: 8px 0;
}

.menutop-wrap ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    gap: 15px;
}

.menutop-wrap ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}


.logo-container {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
}

.logo-container img {
    width: 220px;  /* Default */
    height: auto;
}

/* Navbar Styling */
#nav-menu-container {
    flex-grow: 1;
    display: flex;
    justify-content: flex-end;
}

.nav-menu {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-menu li {
    margin-left: 20px;
}

.nav-menu a {
    text-decoration: none;
    font-weight: bold;
    color: black;
}

/* Mobile Menu Button */
.menu-toggle {
    display: none;
    font-size: 30px;
    cursor: pointer;
    background: none;
    border: none;
}

/* 📍 Medium Screens (Between 992px - 1200px) */
@media (min-width: 992px) and (max-width: 1200px) {
    .logo-container img {
        width: 180px;
    }
}

/* 📍 Small Screens (Between 768px - 991px) */
@media (min-width: 768px) and (max-width: 991px) {
    .main-menu .row {
        flex-direction: column;
        text-align: center;
    }

    #nav-menu-container {
        justify-content: center;
        margin-top: 10px;
    }

    .nav-menu {
        flex-direction: row;
        gap: 10px;
    }

    /* Keep logo aligned to the left in this range */
    .logo-container {
        align-self: flex-start; /* Ensures it stays on the left side */
    }

    .logo-container img {
        width: 160px;
    }
}

/* 📍 Mobile Screens (Below 767px) */
@media (max-width: 767px) {
    .main-menu .row {
        flex-direction: column;
        text-align: center;
    }

    .logo-container {
        margin-bottom: 10px;
        align-self: flex-start; /* Keep logo on the left side */
    }

    .logo-container img {
        width: 140px;
    }

    /* Mobile Menu */
    .nav-menu {
        display: none;
        flex-direction: column;
        gap: 10px;
        text-align: center;
        background: white;
        padding: 10px;
        position: absolute;
        width: 100%;
        left: 0;
        top: 60px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
    }

    .menu-toggle {
        display: block;
    }

    .nav-menu.active {
        display: flex;
    }
}

</style>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>AWM Land Developers</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">=
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
 
	<!-- Start Header Area -->
	<header class="default-header">
    <div class="menutop-wrap">
        <div class="menu-top container">
            <div class="d-flex justify-content-end align-items-center">
                <ul class="list">
                    <li><a href="tel:+918707005286">+91 8707005286</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-menu">
        <div class="container">
            <div class="row align-items-center justify-content-between">
    
                <div class="logo-container">
                    <a href="index.php">
                        <img src="img/awmlogos.jpeg" alt="AWM Logo">
                    </a>
                </div>

                
                <button class="menu-toggle" onclick="toggleMenu()">☰</button>

            
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="LEGAL.php">Legal</a></li>
                        <li><a href="AVAILABILITY.php">Availability</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
