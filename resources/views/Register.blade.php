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
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/Register">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Start
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" data-toggle="modal" data-target="#signUp">Sign Up</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" data-toggle="modal" data-target="#forgotPassword">Forgot Password</a>
            </div>
          </li>
          
        </ul>
        <!-- Button to Open the "Login" Modal -->
        <form class="form-inline my-2 my-lg-0">
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#signIn">Sign In</button>
        </form>
      </div>
    </nav>
    <!--================ End Nav Bar =================-->

    <!--================ Home Banner Area =================-->
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
    <!--================ End Home Banner Area =================-->

    <!-- The "Login" Modal -->
    <div class="modal" id="signIn">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Sign In</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form action="/action_page.php">
                  <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Your Username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Your Password">
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                  </div>
                </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-success">LOGIN</button>
            </div>
            
          </div>
        </div>
      </div>

      <!-- The "Forgot Password" Modal -->
    <div class="modal" id="forgotPassword">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Forgor Your Password?</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form action="/action_page.php">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                  </div>
                </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Send</button>
            </div>
          </div>
        </div>
      </div>

    <!-- The "Sign Up" Modal -->
    <div class="modal" id="signUp">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Register to HotelCloud</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form action="/create" role="form" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Your Name"required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Your Email"required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="phone_number" placeholder="Phone Number"required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="hotel_name" placeholder="Hotel Name"required
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="number_of_room" placeholder="Number of Rooms"required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="username" placeholder="Create Username"requiredrequired>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Create Password" required>
                  </div>
                </form>
            </div>
            
            <!-- Modal footer -->
            {{ csrf_field() }}
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" href="/Register">Let's Manage</button>
            </div>
            
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html> 