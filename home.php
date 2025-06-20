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
            <img src="assets/images/tra1.jpg" alt="homeimage">
            <h5>Hello <span><?php echo $_SESSION['username'] ?></span> , Welcome you</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Explore and Enjoy Yourself</p>
            <a href="#book">Book Now</a>
        </div>
    </div>
    <!-- Home Section End -->





       <!-- About Start -->
       <section class="about" id="about">
        <div class="container">
  
            <div class="main-txt">
                <h1>About <span>Us</span></h1>
            </div>
    
            <div class="row" style="margin-top: 50px;">
    
            <div class="col-md-6 py-3 py-md-0">
              <div class="card">
                <img src="assets/images/about.jpg" alt="about">
              </div>
            </div>
  
            <div class="col-md-6 py-3 py-md-0">
              <h2>How Travel Agency Work</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, eius sapiente tenetur consequuntur molestias fuga qui 
                provident voluptates facilis ut placeat illum ipsam nulla dolore. Corrupti voluptatum vero nulla accusantium.saepe cupiditate 
                ut exercitationem deserunt, facilis quam perspiciatis autem iure illo harum minima. Quas, vitae aperiam laudantium alias 
                asperiores nulla rerum, nihil eveniet perferendis sint illum accusamus officiis aliquam Lorem ipsum dolor sit amet 
                consectetur adipisicing elit. Quibusdam rem cumque quisquam impedit ullam illo repellendus magni voluptates.
                Unde, ipsa quisquam pariatur officiis saepe aut perferendis delectus minus ut ratione! Corrupti voluptatum vero nulla 
                ut exercitationem deserunt, facilis quam perspiciatis autem iure illo harum minima. Quas, vitae aperiam laudantium alias 
                consectetur adipisicing elit accus antium saepe cupiditate voluptatum vero nulla accusantium.saepe. </p>
              <button id="about-btn">Explore More</button>
            </div>
  
          </div>
  
        </div>
      </section>
      <!-- About End -->

             <!-- Section package Start -->
    <section class="packages" id="packages">
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
              <img src="assets/images/pack1.jpg" alt="packkage1">
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
              <img src="assets/images/pack2.jpg" alt="packkage2">
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
              <img src="assets/images/pack3.jpg" alt="packkage4">
              <div class="card-body">
                  <h3>Beach Packages</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas repellendus</p>
                  <h6>Price $750 <span>7Days 6Nights</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <div class="overlay">
                <i class="fa-regular fa-heart"></i>
              </div>
              <img src="assets/images/pack4.jpg" alt="packkage4">
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
              <img src="assets/images/pack5.jpg" alt="packkage5">
              <div class="card-body">
                  <h3>Family Packages</h3>
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
              <img src="assets/images/pack6.jpg" alt="packkage6">
              <div class="card-body">
                  <h3>Cruies Packages</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing uptas veniam maiores,nostrum</p>
                  <h6>Price $520 <span>5Days 4Nights</span></h6>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

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
                        <h3>Europe Tourism</h3>
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
                    <img src="assets/images/blog5.jpg" alt="Project Four">
                     <div class="gallery-overlay">
                        <h3>Japan Tourism</h3>
                        <h6>5 Days 4 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog6.jpg" alt="Project Four">
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
                    <img src="assets/images/blog11.jpg" alt="Project Four">
                     <div class="gallery-overlay">
                        <h3>Singapore Tourism</h3>
                        <h6>3 Days 2 Nights</h6>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/images/blog12.jpg" alt="Project Four">
                     <div class="gallery-overlay">
                        <h3>Italy Tourism</h3>
                        <a href="#" target="_blank" class="btn-tertiary">LearnMore<i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- gallery Section End-->
   
     <section class="section__container container_fluid newsletter__container" id="contact">
      <div class="newsletter__content">
        <h2 class="section__header">Sign Up to our Newsletter</h2>
        <p class="section__description">
          Join our community of avid travelers and receive regular doses of
          wanderlust straight to your inbox.
        </p>
        <form action="">
          <input type="text" placeholder="Enter Your Email" required/>
          <button type="submit" class="news-btn">Subscribe</button>
        </form>
      </div>
    </section>






    
 

      <!-- Services Section -->
      <section class="services section-padding bg-light" id="services">
        <div class="container">
          <div class="main-txt">
            <h1><span>S</span>ervices</h1>
          </div>
            <div class="services-main">
                <div class="service-item">
                  <i class="fa-solid fa-hotel"></i>
                    <h3>Hotels Booking</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit ducimus dignissimos sequi</p>
                </div>
                <div class="service-item">
                  <i class="fa-solid fa-utensils"></i>
                    <h3>Food Service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
                 <div class="service-item">
                  <i class="fa-solid fa-plane"></i>
                    <h3>Ticket Booking</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing </p>
                </div>
                <div class="service-item">
                    <i class="fa-solid fa-users"></i>
                    <h3>Tourist Guides</h3>
                    <p>Voluptates voluptas voluptatem est ex magnam, incidunt veritatis a maxime asperiores.</p>
                </div>
                <div class="service-item">
                    <i class="fa-solid fa-house"></i>
                    <h3>Farm Houses</h3>
                    <p>Ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing</p>
                </div>
                <div class="service-item">
                  <i class="fa-solid fa-car"></i>
                  <h3>Cabs Booking</h3>
                  <p>Lorem ipsum dolor sit amet consectetur,Enim, in, aliquid minima ullam architecto inventore</p>
              </div>
              <div class="service-item">
                <i class="fa-solid fa-user-shield"></i>
                <h3>Customer Care</h3>
                <p>Designing intuitive and visually appealing user interfaces</p>
            </div>
              <div class="service-item">
                <i class="fa-solid fa-umbrella-beach"></i>
                <h3>Beach Resort</h3>
                <p>Quae sunt quas repellendus, vel cupiditate quos quisquam omnis corporis quo doloremque </p>
            </div>
              
            </div>
        </div>
    </section>

   
  <!--Section Book Start -->
    <!-- <section class="book" id="book">
      <div class="container">

        <div class="main-text">
          <h1><span>B</span>ook</h1>
        </div>
        
        <div class="row">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="assets/images/bookcard.png" alt="gallery">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0 back">
            <form action="#">
              <input type="text" class="form-control" placeholder="Where From" required><br>
              <input type="text" class="form-control" placeholder="Where To" required><br>
              <input type="date" class="form-control" placeholder="Arrivals" required><br>
              <input type="date" class="form-control" placeholder="Leaving" required><br>
              <textarea class="form-control" rows="5" name="text" placeholder="Enter Your Name & Details"></textarea>
              <input type="submit" value="Book Now" class="submit" required>

            </form>
          </div>

        </div>
      </div>
    </section> -->
    <!-- Section Book End -->




    



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