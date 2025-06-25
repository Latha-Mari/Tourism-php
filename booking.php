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
    <title>Booking Page</title>
   
   
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
            <h5>Hello <span><?php echo $_SESSION['username'] ?></span> , Welcome you Our Booking Page</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Explore and Enjoy Yourself</p>
            <a href="#book">Book Now</a>
        </div>
    </div>
    <!-- Home Section End -->

    <section class="booking" id="book">
      <div class="container">
            <form action="">
              <select class="place" class="form-control" name="place" required>
                <option value="">Select Your Destination Place Here</option>
                <option value="India">India</option>
                <option value="USA">United States of America</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <option value="Japan">Japan</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Italy">Italy</option>
                <option value="Spain">Spain</option>
                <option value="UK">United Kingdom</option>
                <option value="China">China</option>
                <option value="Brazil">Brazil</option>
                <option value="Mexico">Mexico</option>
              </select>
             
              <select class="person" name="adult" class="form-control" required>
                <option value="">Select The Number Of Adults</option>
                <option value="1">1 Adult</option>
                <option value="2">2 Adults</option>  
                <option value="3">3 Adults</option>
                <option value="4">4 Adults</option>
                <option value="5">5 Adults</option>
                <option value="6">6 Adults</option>
                <option value="7">7 Adults</option>
                <option value="8">8 Adults</option>
                <option value="9">9 Adults</option>
                <option value="10">10 Adults</option>
              </select>
              <select class="person" name="kids" class="form-control" required>
                <option value="">Select The Number Of Persons</option>
                <option value="0">0 kid</option>
                <option value="1">1 kid</option>
                <option value="2">2 kids</option>  
                <option value="3">3 kids</option>
                <option value="4">4 kids</option>
                <option value="5">5 kids</option>
              </select>
              <input type="date" class="form-control" placeholder="Arrivals" required>
              <input type="date" class="form-control" placeholder="Leaving" required>
              <textarea class="form-control" rows="5" name="text" placeholder="Type Your Message Here..."></textarea>
              <button class="but">Submit</button>
            </form>
      </div>
    </section>


    



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
    