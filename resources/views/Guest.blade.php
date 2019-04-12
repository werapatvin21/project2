<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- icon -->
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>HotelCloud - Guests Management</title>
  </head>
  <body>

    <!--================ Nav Bar =================-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/Dashboard">HotelCloud</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/Dashboard">Dashboard</a>
          </li>
          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Management<span class="sr-only">(current)</span> 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="reservation.html">Reservations</a>
                <a class="dropdown-item" href="/Service">Services</a>
                <a class="dropdown-item" href="/Guest">Guest</a>
                <a class="dropdown-item" href="stock.html">Stock</a>
                <a class="dropdown-item" href="/Setting">Staff</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="report.html">Bookings Report</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Setting
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="setting.html">Rooms & Services</a>
              </div>
            </li>
          </ul>
  
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hello, Kanyarush
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="account.html">My Account</a>
              </div>
            </li>
          </ul>
  
          <!-- Button to Open the "Logout" Modal -->
          <form class="form-inline my-2 my-lg-0" action="/Register">
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#signIn">Log Out</button>
          </form>
      </div>
    </nav>
    <!--================ End Nav Bar =================--> 
    
      <div class="container">
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <h2>Guests</h2>
            <div class="input-group">
              <!-- Button to "Search Staff" -->
              <div class="btn-group mr-2" role="group" aria-label="First group">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search Guest" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              </form>  
              </div>
           
              <!-- Button to Open the "Add Staff" Modal -->
              <div class="btn-group mr-2" role="group" aria-label="Second group">
              <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#newType">Person <ion-icon name="person"></ion-icon></button>
                  <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#spePrice"><ion-icon name="people"></ion-icon> Company</button>
              </div>
            </div>
          </div>

        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Booking ID</th>
              <th>Date</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>10111</td>
              <td>11-15/10/2018</td>
              <td>Seth MacFarlane</td>
              <td>seth.m@abc.com</td>
              <td>012-345-6789</td>
              <td align="center">
                <ion-icon name="document" data-toggle="modal" data-target="#guestDetail"></ion-icon>
              </td>
            </tr>
            <tr>
              <td>11012</td>
              <td>12-13/10/2018</td>
              <td>Rosemarie DeWitt</td>
              <td>rose.d@abc.com</td>
              <td>012-345-6789</td>
              <td align="center">
                <ion-icon name="document" data-toggle="modal" data-target="#guestDetail"></ion-icon>
              </td>
            </tr>
            <tr>
              <td>10113</td>
              <td>16-18/10/2018</td>
              <td>Anthony Rapp</td>
              <td>anthony.r@abc.com</td>
              <td>012-345-6789</td>
              <td align="center">
                <ion-icon name="document" data-toggle="modal" data-target="#guestDetail"></ion-icon>
              </td>
            </tr>
            <tr>
              <td>10114</td>
              <td>19-20/10/2018</td>
              <td>Rita Wilpisut</td>
              <td>rita.w@abc.com</td>
              <td>012-345-6789</td>
              <td align="center">
                <ion-icon name="document" data-toggle="modal" data-target="#guestDetail"></ion-icon>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

        <!--================ The "Guest Detail" Modal =================-->
        <div class="modal" id="guestDetail">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Guest Detail</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                  <form action=""> <!-- action here -->

                        <div class="row">
                          <div class="col">
                            <div class="form-group row">
                              <label for="guestName" class="col-sm-4 col-form-label">First Name</label>
                              <div class="col-sm-8"><input type="text" class="form-control" id="guestName" disabled></div>
                            </div>
                          </div>
                          <div class="col">
                              <div class="form-group row">
                                <label for="guestLastname" class="col-sm-4 col-form-label">Last Name</label>
                                <div class="col-sm-8"><input type="text" class="form-control" id="guestLastname" disabled></div>
                              </div>
                          </div>  
                        </div>   

                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nationalID" class="col-sm-4 col-form-label">National ID</label>
                                    <div class="col-sm-8"><input type="text" class="form-control" id="nationalID" disabled></div>
                                </div>  
                            </div>  
                            <div class="col">
                                <div class="form-group row">
                                    <label for="passportID" class="col-sm-4 col-form-label">Passport ID</label>
                                    <div class="col-sm-8"><input type="text" class="form-control" id="passportID" disabled></div>
                                </div>  
                            </div> 
                        </div> 
                        
                        <div class="row">
                            <div class="col">
                              <div class="form-group row">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8"><input type="text" class="form-control" id="inputEmail" placeholder="abc@def.com" disabled></div>
                              </div>
                            </div> 
                            <div class="col">
                              <div class="form-group row">
                                  <label for="guest_phone" class="col-sm-4 col-form-label">Phone</label>
                                  <div class="col-sm-8"><input type="text" class="form-control" id="guest_phone" placeholder="012-345-6789" disabled></div>
                              </div>
                            </div>     
                        </div>   
                        
                        <div class="row">
                            <div class="col">
                              <div class="form-group row">
                                <label for="guest_inputAddress" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8"><input type="text" class="form-control" id="guest_inputAddress" placeholder="1234 Main St" disabled></div>
                              </div>
                            </div>
                        </div>                     

                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="guest_prov_country" class="col-sm-4 col-form-label">Province & Country</label>
                                    <div class="col-sm-8"><input type="text" class="form-control" id="guest_prov_country" placeholder="Bangkok" disabled></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="fileType" class="col-sm-4 col-form-label">Citizen File</label>
                                    <div class="col-sm-8"><input type="text" class="form-control" id="guest_citizen" placeholder="ตรงนี้ต้องดึงภาพ passport/บัตร ปชช. มาโชว์" disabled></div>
                                </div>  
                            </div>  
                        </div> 

                        <div class="form-group">
                            <label for="guest_note">Note: </label>
                            <textarea class="form-control" id="guest_note" rows="3" disabled></textarea>
                        </div>
                        
                        <div class="form-group">
                          <label for="guest_history">History: </label>
                          <textarea class="form-control" id="guest_history" rows="3" placeholder="booking id, chk in-out date" disabled></textarea>
                        </div>

                  </form> <!-- end action here -->
                
              </div>
            </div>
          </div>
      <!--================ End "Guest Detail" Modal =================-->
  </body>
</html>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>