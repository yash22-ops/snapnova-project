<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SnapNova</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://iili.io/3uNttmg.png">
  <!-- LINKING FONT AWESOME FOR ICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header  /  Navbar -->
      <header>
      <nav class="navbar section-content">
        <a href="index.html" class="nav-logo">
          <h2 class="logo-text">SnapNova</h2>

        </a>
        <ul class="nav-menu">
            <button id="menu-close-button" class="fas fa-times"></button>
          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#shop" class="nav-link">Shop</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="register">
            <a href="#register" class="regist-r">Register</a>
          </li>
          </ul>
        
        <button id="menu-open-button" class="fas fa-bars"></button>
        
      </nav>
    </header>

    

    <main>
 <!-- Hero Section -->
      <section class="hero-section">
        <div class="section-content">
          <div class="hero-details">
            <h2 class="title">SnapNova</h2>
            <h2 class="subtitle">Capture Life with Precision & Innovation</h2>
            <p class="description">Compact, innovative, and built for stunning image quality.</p>

            <div class="buttons">
              <a href="#" class="button order-now">Order Now</a>
              <a href="#" class="button contact-us">Contact Us</a>
            </div>
          </div>
          <div class="hero-image-wrapper">
            <img src="https://iili.io/3IdJUPa.jpg" alt="Hero" class="hero-image">
          </div>
        </div>
      </section>

      <!-- ABOUT Section-->
       <section class="about-section" id="about">
        <div class="section-content">
          <div class="about-image-wrapper">
            <img src="https://iili.io/3IdgSfe.png" alt="About" class="about-image">
          </div>
          <div class="about-details">
            <h2 class="section-title">About Us</h2>
            <p class="text">
              At SnapNova, we are dedicated to innovation in photography, delivering high-quality cameras and lenses that empower creators. With a legacy of optical excellence, our compact and powerful devices ensure stunning image quality. Whether you're a professional or an enthusiast, Olympus helps you capture life’s best moments with precision, creativity, and unmatched performance. Create. Inspire. Capture.
            </p>
            <div class="social-link-list">
              <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-github"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
          </div>
        </div>
       </section>


       <!-- SHOP Section -->
        <section class="menu-section" id="shop">
          <h2 class="section-title">SHOP</h2>
          <div class="section-content">
            <ul class="menu-list">
              
              <li class="menu-item">
                <img src="https://iili.io/3INKDb9.jpg" alt="Lumix" 
                class="menu-image">
                <h3 class="name">Lumix</h3>
                <p class="text"> Versatile, high-quality imaging, sleek design, exceptional performance for all photographers.</p>
              </li>
              <li class="menu-item">
                <img src="https://iili.io/3INnsup.jpg" alt="Black Lumix" 
                class="menu-image">
                <h3 class="name">Fujifilm </h3>
                <p class="text"> Retro design, vibrant colors, sharp details, perfect for creative photography.</p>
              </li>
              <li class="menu-item">
                <img src="https://iili.io/3INohiX.jpg" alt="Black Lumix" 
                class="menu-image">
                <h3 class="name">RED Camera</h3>
                <p class="text">Cinema-grade quality, high resolution, dynamic range, perfect for filmmakers.</p>
              </li>
            </ul>
          </div>
        </div>

        

        <!-- Log-IN section -->
        <div class="container" id="register">
          <div class="left">
            <img class="bg" src="https://iili.io/3Id2whP.png" alt="bg" />
            <div class="logo">
              <h1></h1>
            </div>
            <div class="left-content">
              <h1>SnapNova</h1>
              <a href="#" class="btn">SIGN UP</a>
            </div>
          </div>
          <div class="right">
            <h1>Login</h1>
            <p class="p1">LOG-IN</p>
            <form action="#" class="form">
              <div class="input-box">
                <input type="text" placeholder="Username" class="input" required />
                <label for="input"></label>
              </div>
              <div class="input-box">
                <input
                  type="password"placeholder="Password" class="input"required/>
                <label for="input"></label>
              </div>
              <button class="btn-sec">LOGIN</button>
            </form>
            <p class="p2">OR LOGIN WITH</p>
            <div class="social-link-list-lo">
              <a href="#" class="social-link-lu">GOOGLE<i class="fa-brands fa-google"></i></a>
              <a href="#" class="social-link-lu">MICROSOFT<i class="fa-brands fa-microsoft"></i></a>
              <a href="#" class="social-link-lu">LINKEDIN<i class="fa-brands fa-linkedin"></i></a>
            </div>
            </div>
          </div>
        </div>

        <!-- Contact section -->
      <!-- <section class="contact-section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p>RCERT,CHANDRAPUR</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-envelope"></i>
              <p>info@SnapNova.com</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-phone"></i>
              <p>1234567890</p>
            </li>
            
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Saturday: 10:00 AM - 3:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-globe"></i>
              <p>www.SnapNova.com</p>
            </li>
          </ul>
          <form action="#" class="contact-form">
            <input type="text" placeholder="Your name" class="form-input" required />
            <input type="email" placeholder="Your email" class="form-input" required />
            <textarea placeholder="Your message" class="form-input" required></textarea>
            <button type="submit" class="button submit-button">Submit</button>
          </form>
        </div>
      </section> -->




        <!-- Footer section -->
         <section class="contact-section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p>RCERT,CHANDRAPUR</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-envelope"></i>
              <p>info@SnapNova.com</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-phone"></i>
              <p>1234567890</p>
            </li>
            
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Saturday: 10:00 AM - 5:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-globe"></i>
              <p>www.SnapNova.com</p>
            </li>
          </ul>
          <!-- <form action="#" class="contact-form">
            <input type="text" placeholder="Your name" class="form-input" required />
            <input type="email" placeholder="Your email" class="form-input" required />
            <textarea placeholder="Your message" class="form-input" required></textarea>
            <button type="submit" class="button submit-button">Submit</button>
          </form> -->
        </div>
      </section>
      <footer class="footer-section">
        <div class="section-content">
          <p class="copyright-text">© 2025 SnapNova</p>
          <div class="social-link-list">
            <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
          <p class="policy-text">
            <a href="#" class="policy-link">Snap</a>
            <span class="separator">•</span>
            <a href="#" class="policy-link">Nova</a>
          </p>
        </div>
      </footer>




    </main>
       <!-- Linking Swiper script -->
       <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
       <!-- Linking Swiper Script -->
        <script src="script.js"></script>
</body>
</html>