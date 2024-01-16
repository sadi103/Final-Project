<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    @vite(["resources/css/app.css", "resources/css/index.css", "resources/css/header.css", "resources/css/blog.css", "resources/css/about.css", "resources/css/contact.css"])
  </head>
  <body>
    <header>
      <div class="main">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('reservation') }}">Reservation</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
      </div>
      <div class="title">
        <h1>Alwad Alakhdar Venues</h1>
      </div>
    </header>
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
  </body>
</html>
