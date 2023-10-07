<!-- <html>
  <head>
    <title>chakravyuh</title>
  </head>
  <body>
    <h1>chakravyuh</h1>
    <img src="{{ url_for('video_feed') }}">
  </body>
</html> -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chakravyuh-The Detector</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="{{ url_for('static',filename='eye.svg') }}" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ url_for('static',filename='css/style.css') }}">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+01123456790" class="helpline-box"></a>

        <a href="#" class="logo">
           <!-- <img src="./assets/images/logo.svg" alt="Chakravyuh logo"> -->
          <h1 class="h4 hero-title">Chakravyuh</h1>

        </a>

        <div class="header-btn-group">

          

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="{{ url_for('static',filename='images/logo-blue.svg') }}" alt="Chakravyuh logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="#about" class="navbar-link" data-nav-link>about</a>
            </li>

            <li>
              <a href="#types" class="navbar-link" data-nav-link>Type</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
            </li>

          </ul>

        </nav>
        <a href="login.php">
        <button class="btn btn-primary">Login</button>
      </a>
      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Securing tomorrow by detecting today</h2>

          <p class="hero-text">
            Human detection technologies continue to advance with innovations in artificial intelligence, machine learning, computer vision, and sensor technologies.Join with us to discover new heights of technology. 
          </p>

          <div class="btn-group">
          <a href="signup.php">
            <button class="btn btn-primary">Sign Up</button>
            </a>
            <a href="login.php">
            <button class="btn btn-primary">Login</button>
            </a>
          </div>

        </div>
      </section>





      <!-- 
        - #INFO
      -->

      <section class="tour-search" id="about">
        <div class="container">
          <h2 class="h1 hero-titles">Chakravyuh</h2>

          <p class="hero-texts" >
            Robust human detection and acquisition refer to the development of highly reliable and accurate systems and techniques for detecting and acquiring information about the presence, location, and characteristics of human beings in various environments, conditions, and scenarios.The goal of Chakravyuh is to create systems that can reliably and accurately identify humans and their actions in a wide range of situations, ensuring the safety, security, and efficiency of various applications and industries. Advances in technology, especially in the fields of computer vision, machine learning, and sensor technology, continue to drive improvements in this field.
          </p>

        </div>
      </section>





      <!-- 
        - #Detection
      -->

      <section class="popular" id="types">
        <div class="container">

          <h2 class="h2 section-title">Types of Detection</h2>

          <!--<p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p> -->

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ url_for('static',filename='images/cameravision.jpg') }}" alt="Camera detection" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Camera Detection</a>
                  </h3>

                  <p class="card-text">
                    Vision-based human detection begins with the capture of visual data using cameras, webcams,etc.It captures images or video frames.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ url_for('static',filename='images/thermal.jpg') }}" alt="Thermal imaging, dubai" loading="lazy">
                </figure>

                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Thermal Imaging</a>
                  </h3>

                  <p class="card-text">
                  Thermal imaging allows you to see variations in temperature and create images or videos that represent these temperature differences.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ url_for('static',filename='images/lidar.jpg') }}" alt="Lidar" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Lidar Sensing</a>
                  </h3>

                  <p class="card-text">
                    Light Detection and Ranging,is a remote sensing technology that uses laser light to measure distances and create detailed 3D representations.
                  </p>

                </div>

              </div>
            </li>

            
          </ul>

          

        </div>
      </section>

      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Chakravyuh's</p>

            <h2 class="h2 section-title">Human recognition</h2>

          </div>
          <a href="main.php" class="main">
           <button class="btn btn-secondary">Start</button>
          </a>
        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <!--<img src="./assets/images/logo2.svg" alt="Chakravyuh logo"> -->
            <h1 class="h4 hero-title">Chakravyuh</h1>

          </a>

          <p class="footer-text">
            Chakravyuh's human detection system is based on an AI model whch is trained by different datsets,capable of recognizing human actions and objects.
          </p>

        </div>

        <!--<div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+01 (123) 4567 90</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>3146 Koontz, California</address>
            </li>

          </ul> 

        </div> -->

        <div class="footer-form">

          <p class="form-text">
            Enter your email for further updates
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023  All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="{{ url_for('static',filename='js/script.js') }}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>