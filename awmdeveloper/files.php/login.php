<style>
      
      .container-login{
         display: flex;
             flex-direction: column;
             align-items: center;
             justify-content: center;
             height: 100vh;
             background: url('img/banner1(1).webp') no-repeat center center/cover;
      }
         .login-container {
              width: 460px;
              padding: 30px;
              border-radius: 24px;
              background: rgba(255, 255, 255, 0.2);
              backdrop-filter: blur(10px);
               text-align: center;
               background: rgba(11, 3, 3, 0.59);
               margin:auto;
         }
         .login-title {
             font-size: 24px;
             font-weight: bold;
             color: white;
             margin-bottom: 20px;
         }
         .login-btn {
             display: block;
             width: 100%;
             padding: 12px;
             margin: 10px 0;
             border: none;
             border-radius: 10px;
             font-size: 16px;
             font-weight: bold;
             text-align: center;
             background: rgba(255, 255, 255, 0.3);
             color: white;
             cursor: pointer;
             transition: 0.3s;
         }
         .login-btn:hover {
             background: rgba(255, 255, 255, 0.5);
         }
         @media (max-width: 768px) {
             .login-container {
                 width: 90%;
             }
         }
     </style>
      
     <?php 
     include_once ('header.php');
     ?>       
     <div class="container-login">
     <div class="login-container">
         <div class="login-title">LOGIN</div>
         <a href=" signin.php " class="login-btn">REAL ESTATE</a>
         <a href="sighninyouraccnt.php  " class="login-btn">LEVEL PLAN</a>
     </div>
     </div>
 </body>
 </html>
 
 
        
 
 </body>
 </html>
 
 
 
 
 
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