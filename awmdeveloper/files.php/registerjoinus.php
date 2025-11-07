<?php 
	include_once ('header.php');
?> 

<style>
    body {
        background-color:rgba(77, 76, 76, 0.97);
    }

    .main-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 20px;
        margin-top: 100px; /* Push content below navbar */
    }

    .left-section {
        text-align: center;
        padding: 20px;
        background-color: #e0e0e0; /* Background color for left section */
        border-radius: 10px;
    }

    .logos img {
        width: 100%; /* Logo width matches the house image */
        max-width: 500px; /* Set a max-width to keep it reasonable */
        height: auto;
        
        border-radius: 3px;
    }

    .house-image img {
        width: 95%;
        height: auto;
        max-height: 250px; 
        object-fit: cover;
        border-radius: 3px;
    }

    .right-section {
        background: #ffffff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h3 {
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-control,
    .form-select {
        border-radius: 5px;
        padding: 10px;
    }

    .btn-success {
        background: black !important;
        border: none;
        padding: 12px;
        font-size: 16px;
        transition: background 0.3s ease-in-out;
    }

    .btn-success:hover {
        background: #ea6c5d !important;
    }

    @media (max-width: 992px) {
        .main-container {
            margin-top: 120px;
        }

        .left-section {
            order: 2;
            padding: 15px;
        }

        .right-section {
            order: 1;
            margin-bottom: 20px;
        }
    }
</style>

<body>
    <div class="container main-container mt-5">
        <div class="row align-items-center">
            <!-- Left Section -->
            <div class="col-lg-6 col-md-12 mb-4 d-flex justify-content-center align-items-center">
                <div class="text-center w-100">
                    <div class="logos mb-3">
                        <img src="img/awmlogos.jpeg" class="img-fluid" alt="Company Logo">
                    </div>
                    <div class="house-image">
                        <img src="Holmes Real Estate-doc/img/new home.jpeg" class="img-fluid rounded" alt="House with money">
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="form-container p-4 bg-white shadow rounded">
                    <h3 class="text-center font-weight-bold mb-4">Join Us & Secure Your Wealth</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Introducer Id">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Introducer Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Place Under Id">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Place Under Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Mobile Number">
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="form-select">
                                    <option selected disabled>Select State</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms">
                            <label class="form-check-label" for="terms">
                                I read and agree to all Terms & Conditions of AWM LAND DEVELOPERS
                            </label>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Register</button>
                    </form>
                    <p class="text-center mt-3">Already a member? <a href="#">Login Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php 
	include_once ('footer.php');
?> 

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
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
