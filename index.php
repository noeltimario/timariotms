<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    $pageTitle = "Timario"; // Set the title for this page
    $cssFileName = "css/index.css";
    include "head.php"; // Include the common head section
  ?>
</head>

<body>

  <!-- **** Header Section **** -->
  <header id="header">  
    <!-- Nav Bar-->
    <nav class="navbar" id="navbar">
      <div class="logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a> <span class="menu-icon" 
      id="menuIcon"><i class="fa-solid fa-bars" style ="font-size:20px"></i></span></div>           
      <ul class="nav-links" id="navLinks">
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#features">Features</a></li>
        <li><a class="nav-link scrollto" href="adminLogin.php">Admin</a></li>
        <li><a class="nav-link scrollto" href="employeeLogin.php">Employee</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header><!-- End Header -->

  <!-- **** Hero section **** -->
  <section id="hero">
    <div class="headings">
      <div class="main-heading">
        <p>Empower Your People To</p>
        <p>Do Their Best Work.</p>
      </div>
      <div class="sub-heading">
        <p>Elevate Your Business, Elevate Your Future.</p>
        <p>One tool for your team. Write, plan and get organized.</p>
      </div>
      <div class="login">
        <button><a href="#about">Get Started</a></button>
      </div>
    </div>
    <img src="images/background.png" alt="Image">
  </section><!-- End Hero -->

  <main>
    <!-- **** About Us **** -->
    
    </section><!-- End About Us -->

    <!-- **** Counts Section **** -->
    <section id="counts">
      <div class="container">

        <div class="row">
          <div class="col1">
            <div class="count-box">
              <i class="fa-solid fa-face-smile"></i>
              <div class="counter"><span id="counter1">0</span></div>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col2">
            <div class="count-box">
              <i class="fa-solid fa-file-circle-check"></i>
              <div class="counter"><span id="counter2">0</span></div>
              <p>Projects</p>
            </div>
          </div>

          <div class="col3">
            <div class="count-box">
              <i class="fa-solid fa-headset"></i>
              <div class="counter"><span id="counter3">0</span></div>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col4">
            <div class="count-box">
              <i class="fa-solid fa-users"></i>
              <div class="counter"><span id="counter4">0</span></div>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
  
    <!-- **** Features Section **** -->
    <section id="features">
      <div class="container">
        <h2>Key Features</h2>

        <div class="row2">
          <p>Services We Provide</p>
        </div>
        <div class="row">
          <div class="col1">
            <p><img src="images/easy-to-use.png" alt="Easy"></p>
            <p>Easy to use</p>
            <span>
              We provide a simple and easy way for you to manage your business online, with our website.
              The application is easy for newcomers as well.
            </span>
          </div>
          <div class="col2">
            <p><img src="images/secure.png" alt="Secure"></p>
            <p>Secure</p>
            <span>All data is stored in a secure database. No one has access without the permission from the admin. All data is encrypted at rest, in transit (HTTPS), and during processing. Data is also protected.</span>
          </div>
          <div class="col3">
            <p><img src="images/customizable.png" alt="Customizable"></p>
            <p>Customizable</p>
            <span>Users have full control over all aspects of a project, from its name to its description. They can choose how they want their project to be displayed.</span>
          </div>
          <div class="col4">
            <p><img src="images/time-track.png" alt="Time-Track"></p>
            <p>Time tracking</p>
            <span>Users can track the time they spend on each project. This helps them keep track of how much work is left for each task or project.</span>
          </div>
        </div>
      </div>
    </section><!-- End Features -->

    <!-- **** Contact Us Section **** -->
    <section id="contact">
      <div class="container">
        <h2>Contact Us</h2>

        <div class="row">
          <div class="row2">
            <p><b>Get In Touch</b></p>
            <p>We're open for any suggestion or just to have a chat!</p>
          </div>

          <div class="row3">
            <div class="col1">
              <form action="php/contact.php" method="post" id="contact-form">
                <p><label for="name"><i class="fa-solid fa-user"></i> </label>
                <input type="text" id="name" name="name" placeholder=" Your Full Name.." required/></p>

                <p><label for="email"><i class="fa-solid fa-envelope"></i> </label>
                <input type="email" id="email" name="email" placeholder=" Your email.." required/></p>

                <p><label for="message"><i class="fa-solid fa-message"></i> Message :</label>
                <textarea id="message" name="message" placeholder=" Write something.." rows="6" cols="37" style="padding:10px"></textarea></p>

                <input type="submit" value="Submit" id="submit-btn">
              </form>
            </div>
          
            <div class="col2">
              <img src="images/contact.png" alt="Contact">
            </div>
          </div>

          <div id="row4">
            <div id="response"></div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main>

  <!-- **** Footer **** -->
  <footer id="footer">
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <img src="images/logo.png" alt="logo">
        </div>
        <div class="media-icons">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <div class="desc">
         I am Noel Timario from BSIT-3E this is a sample project that I work.
        </div>
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#hero">Home</a></li>
          <li><a href="#contact">Contact us</a></li>
          <li><a href="#login">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Technology</li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Php</a></li>
        </ul>
        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
      
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>
  
  <!-- Template Main JS File -->
  <script src="js/index.js"></script>  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>