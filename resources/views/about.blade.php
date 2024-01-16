<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    @vite(["resources/css/app.css", "resources/css/about.css", "resources/css/header.css"])
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
        <h2>ABOUT</h2>
      </div>
    </div>

    <div class="about">
      <div class="container">
        <div class="inside">
          <div class="column1">
            <h2>About Our Company</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
          </div>
          <div class="column2">
            <figure>
              <img src="images/about.png" alt="#">
            </figure>
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