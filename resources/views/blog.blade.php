<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    @vite(["resources/css/app.css", "resources/css/blog.css", "resources/css/header.css"])
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
        <h2>BLOG</h2>
      </div>
    </div>
    <div class="blog">
      <div class="container">
        <div class="column">
          <div class="blog_container">
            <div class="blog_bg">
              <div class="row d_flex">
                <div class="image_container">
                  <div class="blog_img">
                    <figure>
                      <img src="images/blog_img1.jpg" alt="#">
                    </figure>
                  </div>
                </div>
                <div class="blog_text">
                  <div class="marriage_text">
                    <h3>Tempor incididunt ut labore et dolore</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    <h4>
                      <strong>Like</strong>
                      <strong class="comment_padding">Comment</strong>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
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