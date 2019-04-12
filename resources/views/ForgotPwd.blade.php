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
      </div>
    </nav>
    <!--================ End Nav Bar =================-->

  <!--================ The "Forgot Password" =================-->
<div class="container">
  <div class="row-mt-3">
    <div class="pb-2 mt-4 mb-2 border-bottom"><h4>Forgor Your Password?</h4></div>
  </div>
  <div class="row-mt-3">
      <form action=""> <!-- action here -->
        <div class="form-group">
          <label for="email">Your Email:</label>
          <input type="email" class="form-control" id="forgot_email"> 
          <!-- ตรงนี้ต้องเอา email ที่ input มาไปเทียบกับ DB ที่เป็นรายชื่อ user เลยไม่แน่ใจว่า ต้องตั้ง ID ใหม่ หรือใส่ ID เดียวกับ owner_email -->
        </div>
      </form>
    </div>
  </div>
  <div class="row-mt-3">
    <div class="col-12 text-center">
      <button type="button" class="btn btn-success">Send</button>
    </div>
  </div>
</div>
  <!--================ End The "Forgot Password" =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html> 