<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Manage Hotel in Cloud</title>
  </head>
  <body>

    <!--================ Nav Bar =================-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/Register">HotelCloud</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto"></ul>

        <!-- Button to Open the "Sign In" Modal -->
        <form class="form-inline my-2 my-lg-0">
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#signIn">Sign In</button>
        </form>
      </div>
    </nav>
    <!--================ End Nav Bar =================-->

    <!--================ Home Banner Area =================-->
    <div class="wrapper">
        <div class="message">

    <section>
      <div class="container">
      
      <div class="text-center"> 
        <h1>HotelCloud</h1>
        <h3>better management, better business</h3>
        <p>“ Chilling out on the bed in your hotel room watching television, <br>while wearing your own pajamas, is sometimes the best part of a vacation. ” <br>- Laura Marano -</p>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#signUp">Get Started</a>
      </div>
      </div>
    </section>

    </div>
  </div>
    <!--================ End Home Banner Area =================-->

    <!--================ The "Sign In" Modal =================-->
    <div class="modal" id="signIn">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <div class="modal-header">
              <h4 class="modal-title">Sign In</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <form action="/Dashboard"> <!-- action here -->
                  <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="signIn_username" name="username" placeholder="Your Username">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="signIn_pwd" name="password" placeholder="Your Password">
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="signIn_remember"> Remember me<br><br>
                      <a href="/ForgotPwd">Forgot password?</a>
                    </label>
                  </div>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            </div>
            
            <div class="modal-footer">
              <button type="submit" name="login" value="login" class="btn btn-success">LOGIN</button>
            </div>

            </form>
          </div>
        </div>
    </div>
    
    <!--================ End The "Sign In" Modal =================-->

    <!--================ The "Sign Up" Modal =================-->
    <div class="modal" id="signUp">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <div class="modal-header">
              <h4 class="modal-title">Register to HotelCloud</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <form action="/Register" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" id="owner_name" name="name" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="owner_email" name="email" placeholder="Your Email">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" id="owner_tel" name="phone_number" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="owner_hName" name="hotel_name" placeholder="Hotel Name">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" id="owner_rooms" name="number_of_room" placeholder="Number of Rooms">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="owner_uName" name="username" placeholder="Create Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="owner_pwd" name="password" placeholder="Create Password">
                  </div>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            </div>
           
            <div class="modal-footer">
              <button type="submit"  class="btn btn-success">Let's Manage</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    <!--================ End The "Sign Up" Modal =================-->

<style>
html, body{
  height: 100%;
}
body { 
      background-image: url(img/home.jpg) ;
      background-position: center center;
      background-repeat:  no-repeat;
      background-attachment: fixed;
      background-size:  cover;
      background-color: #999;
}

div, body{
  margin: 0;
  padding: 0;
  font-family: exo, sans-serif;
  
}
.wrapper {
  height: 100%; 
  width: 100%; 
}

.message {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%; 
  height:45%;
  bottom: 0; 
  display: block;
  position: absolute;
  background-color: rgba(0,0,0,0.6);
  color: #fff;
  padding: 0.5em;
}
</style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html> 