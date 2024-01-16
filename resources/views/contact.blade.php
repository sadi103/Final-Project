<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    @vite(["resources/css/app.css", "resources/css/contact.css", "resources/css/header.css"])
  </head>
  <body class="main-layout inner_page">
    <header class="full_bg">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="logo_section">
              <div class="logo">
                <a href="index.html">2Rings</a>
              </div>
            </div>
            <!-- nav buttons -->
            <div class="navigation_container">
              <nav class="navbar">
                <div class="navbar_collapse">
                  <ul class="navbar_nav">
                    <li class="nav_item">
                        <a class="nav_link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link" href="{{ route('reservation') }}">Reservation</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="black_re">
      <div class="title">
        <h2>CONTACT US</h2>
      </div>
    </div>

    <div class="contact">
      <div class="container">
        <div class="row d_flex">
          <div class="column">
            <form action="" id="request" class="main-form">
              <div class="row">
                <div class="form-feild">
                  <input class="contactus" placeholder="Name" type="type" name="Name">
                </div>
                <div class="form-feild">
                  <input class="contactus" placeholder="Phone Number" type="type" name="Name">
                </div>
                <div class="form-feild">
                  <input class="contactus" placeholder="Email" type="type" name="Name">
                </div>
                <div class="form-feild">
                  <textarea class="textarea contactus" placeholder="Message" type="type" message="Name"></textarea>
                </div>
                <div class="submition">
                  <div class="submit-button">
                    <button>Send</button>
                  </div>
                  <div class="social-media">
                    
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="column">

          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="footer">
        <div class="copyright">
          <div class="container copyright-text" style="display: flex; justify-content: center; align-items: center;">
              <p>
                © 2023 All Rights Reserved
              </p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>