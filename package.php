<?php 
   session_start();

   include("config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <!-- Bootstrap Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Travel website</title>
    
   
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="#" id="logo"><span>T</span>ourism</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class=" mynav collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="package.php">Packages</a>
              </li>  
                <li class="nav-item">
                <a class="nav-link" href="service.php">Services</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="booking.php">Booking</a>
              </li>
            </ul>
            <a class="btn" href="logout.php">Logout</a>
          </div>
        </div>
      </nav>
    <!-- Navbar End -->





    <!-- Home Section Start -->
    <div class="home" id="home">
        <div class="content">
            <img src="assets/images/package.jpg" alt="homeimage">
            <h5>Hello <span><?php echo $_SESSION['username'] ?></span> , Welcome Our Packages Page</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Explore and Enjoy Yourself</p>
            <a href="#book">Book Now</a>
        </div>
    </div>
    <!-- Home Section End -->


    
       <!-- gallery Section Start-->
    <section id="gallery" class="section-padding">
        <div class="container">
          <div class="main-txt">
            <h1><span>Our</span>Gallery</h1>
          </div>
          
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="assets/images/blog1.jpg" alt="Project One">
                    <div class="gallery-overlay">
                        <h3>India Tourism</h3>
                        <h6>3 Days 2 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog2.jpg" alt="Project Two">
                     <div class="gallery-overlay">
                        <h3>E Tourism</h3>
                        <h6>10 Days 9 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                <img src="assets/images/blog3.jpg" alt="Project Three">
                 <div class="gallery-overlay">
                    <h3>America Tourism</h3>
                    <h6>7 Days 6 Nights</h6>
                    <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
                 <div class="gallery-item">
                    <img src="assets/images/blog4.jpg" alt="Project Four">
                     <div class="gallery-overlay">
                        <h3>Indonesia Tourism</h3>
                        <h6>3 Days 2 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog5.jpg" alt="Project Five">
                     <div class="gallery-overlay">
                        <h3>Japan Tourism</h3>
                        <h6>5 Days 4 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog6.jpg" alt="Project Six">
                     <div class="gallery-overlay">
                        <h3>France Tourism</h3>
                        <h6>3 Days 2 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                  <img src="assets/images/blog7.jpg" alt="Project seven">
                  <div class="gallery-overlay">
                      <h3>China Tourism</h3>
                      <h6>8 Days 7 Nights</h6>
                      <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                  </div>
              </div>
              
              <div class="gallery-item">
                  <img src="assets/images/blog8.jpg" alt="Project eight">
                   <div class="gallery-overlay">
                      <h3>Egypt Tourism</h3>
                      <h6>5 Days 4 Nights</h6>
                      <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                  </div>
              </div>
              <div class="gallery-item">
                    <img src="assets/images/blog9.jpg" alt="Project nine">
                     <div class="gallery-overlay">
                        <h3>Spain Tourism</h3>
                        <h6>3 Days 2 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                 <div class="gallery-item">
                    <img src="assets/images/blog10.jpg" alt="Project ten">
                     <div class="gallery-overlay">
                        <h3>Dubai Tourism</h3>
                        <h6>7 Days 6 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog11.jpg" alt="Project eleven">
                     <div class="gallery-overlay">
                        <h3>Singapore Tourism</h3>
                        <h6>3 Days 2 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog12.jpg" alt="Project twelve">
                     <div class="gallery-overlay">
                        <h3>Italy Tourism</h3>
                        <h6>5 Days 4 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                 <div class="gallery-item">
                    <img src="assets/images/blog13.jpg" alt="Project thirteen">
                     <div class="gallery-overlay">
                        <h3>Canada Tourism</h3>
                        <h6>3 Days 2 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                 <div class="gallery-item">
                    <img src="assets/images/blog14.jpg" alt="Project fourteen">
                     <div class="gallery-overlay">
                        <h3>Switzerland Tourism</h3>
                        <h6>7 Days 6 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog15.jpg" alt="Project fifteen">
                     <div class="gallery-overlay">
                        <h3>Scotland Tourism</h3>
                        <h6>3 Days 2 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                 <div class="gallery-item">
                    <img src="assets/images/blog16.jpg" alt="Project sixteen">
                     <div class="gallery-overlay">
                        <h3>Australia Tourism</h3>
                        <h6>4 Days 3 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog17.jpg" alt="Project seventeen">
                     <div class="gallery-overlay">
                        <h3>Maleysia Tourism</h3>
                        <h6>7 Days 6 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog18.jpg" alt="Project eighteen">
                     <div class="gallery-overlay">
                        <h3>Iran Tourism</h3>
                        <h6>10 Days 9 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog19.jpg" alt="Project nineteen">
                     <div class="gallery-overlay">
                        <h3>Greece Tourism</h3>
                        <h6>5 Days 4 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog20.jpg" alt="Project twenty">
                     <div class="gallery-overlay">
                        <h3>Portucal Tourism</h3>
                        <h6>7 Days 6 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                 <div class="gallery-item">
                    <img src="assets/images/blog21.jpg" alt="Project twentyone">
                     <div class="gallery-overlay">
                        <h3>Iceland Tourism</h3>
                        <h6>4 Days 3 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog22.jpg" alt="Project twentytwo">
                     <div class="gallery-overlay">
                        <h3>Poland Tourism</h3>
                        <h6>10 Days 9 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                 <div class="gallery-item">
                    <img src="assets/images/blog23.jpg" alt="Project twentythree">
                     <div class="gallery-overlay">
                        <h3>Mexico Tourism</h3>
                        <h6>7 Days 6 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog24.jpg" alt="Project twentyfour">
                     <div class="gallery-overlay">
                        <h3>Korea Tourism</h3>
                        <h6>5 Days 4 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
   <!-- gallery Section End-->
   



            <!-- Section package Start -->
    <!-- <section class="packages" id="packages">
      <div class="container">

        <div class="main-txt">
          <h1><span>P</span>ackages</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <div class="overlay">
                <i class="fa-regular fa-heart"></i>
              </div>
              <img src="assets/images/pak1.jpg" alt="">
              <div class="card-body">
                  <h3>Adventure Packages</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                  <h6>Price $550 <span>3Days 2Nights</span></h6>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <div class="overlay">
                <i class="fa-regular fa-heart"></i>
              </div>
              <img src="assets/images/pak2.jpg" alt="">
              <div class="card-body">
                  <h3>Spritual Packages</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus veniam maiores</p>
                  <h6>Price $750 <span>5Days 2Nights</span></h6>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <div class="overlay">
                <i class="fa-regular fa-heart"></i>
              </div>
              <img src="assets/images/pak3.jpg" alt="">
              <div class="card-body">
                  <h3>Friends Packages</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                  <h6>Price $750 <span>7Days 6Nights</span></h6>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak4.jpg" alt="Honeymoon">
                <div class="card-body">
                    <h3>Honeymoon Packages</h3>
                    <p>Lorem ipsum dolor sit uptas repellendus et veniam maiores,nostrum officia </p>
                    <h6>Price $950 <span>3Days 2Nights</span></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak5.jpg" alt="Kids">
                <div class="card-body">
                    <h3>Kids Packages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing maiores,nostrum officia illo</p>
                    <h6>Price $350 <span>3Days 2Nights</span></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak6.jpg" alt="Beach">
                <div class="card-body">
                    <h3>Beach Packages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas veniam maiores,nostrum</p>
                    <h6>Price $520 <span>5Days 4Nights</span></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak7.jpg" alt="Desert">
                <div class="card-body">
                    <h3>Desert Packages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                    <h6>Price $450 <span>5Days 4Nights</span></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak8.jpg" alt="Winter">
                <div class="card-body">
                    <h3>Winter Packages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                    <h6>Price $750 <span>10Days 9Nights</span></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak.jpg9" alt="Falls">
                <div class="card-body">
                    <h3>Island Packages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                    <h6>Price $650 <span>4Days 3Nights</span></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak7.jpg" alt="Desert">
                <div class="card-body">
                    <h3>Cruies Packages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                    <h6>Price $450 <span>5Days 4Nights</span></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak7.jpg" alt="Desert">
                <div class="card-body">
                    <h3>Summer Vocation Packages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                    <h6>Price $750 <span>7Days 6Nights</span></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <i class="fa-regular fa-heart"></i>
                </div>
                <img src="assets/images/pak7.jpg" alt="Desert">
                <div class="card-body">
                    <h3>Hills Packages</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                    <h6>Price $450 <span>5Days 4Nights</span></h6>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section> -->
    <!-- package Section End -->






    



    <footer>
      <div class="container_fluid footer_page">
        <div class="col-md-6 flast">
          <h4>About Us</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non sunt ipsam sint adipisci? Consectetur vitae corporis repellendus, autem perspiciatis, aut impedit velit perferendis natus harum, voluptas temporibus suscipit ipsa iusto?</p>
        </div>
        <div class="col-md-3 fclast">
          <p>Guidence</p>
          <p>About Us</p>
          <p>Tour info</p>
          <p>More about</p>
          <p>Contact Us</p>
        </div>
        <div class="col-md-3 fcclast">
          <p>Discounts</p>
          <p>Gift offers</p>
          <p>FAQ</p>
          <div class="icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-github"></i>
          </div>
        </div>
      </div>
      <div class="footer_bar">
        <p>Copyright © 2025 LathaMari web developer. All rights reserved.</p>
      </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>