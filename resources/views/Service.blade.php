<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- DOB -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- icon -->
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>HotelCloud - Services Management</title>
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
                <a class="dropdown-item" href="/Setting">Rooms & Services</a>
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


<!--================ Promotion Setting =================--> 
<div class="container">
    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
        <h2>Services for Guest</h2>
        <div class="input-group">
          <!-- Button to "Search Staff" -->
          <div class="btn-group mr-2" role="group" aria-label="First group">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search Room" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>  
          </div>
       
          <!-- Button to Open the "Add Staff" Modal -->
          <div class="btn-group mr-2" role="group" aria-label="Second group">
          <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#guestService"><ion-icon name="add-circle-outline"></ion-icon>Add Service</button>
          </div>
        </div>
      </div>

    <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Guest's Name</th>
          <th>Room no.</th>
          <th>Check In</th>
          <th>Check Out</th>
          <th>Pay</th>
          <th>Note</th>
          <th>Check In/Out</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Suda</td>
          <td>301</td>
          <td>5/11/2018</td>
          <td>7/11/2018</td>
          <td>ชำระเงินเรียบร้อยแล้ว</td>
          <td>No Service</td>
          <td align="center">
            <button type="button" class="btn btn-outline-secondary btn-sm" disabled>Check In</button>
            <button type="button" class="btn btn-outline-secondary btn-sm">Check Out</button>
          </td>
        </tr>
        <tr>
          <td>Ania</td>
          <td>401</td>
          <td>5/11/2018</td>
          <td>7/11/2018</td>
          <td>ยังไม่ได้ชำระเงิน</td>
          <td>3 Services</td>
          <td align="center">
            <button type="button" class="btn btn-outline-secondary btn-sm" disabled>Check In</button>
            <button type="button" class="btn btn-outline-secondary btn-sm">Check Out</button>
          </td>
        </tr>
        <tr>
          <td>Poompak</td>
          <td>201</td>
          <td>7/11/2018</td>
          <td>8/11/2018</td>
          <td>ยังไม่ได้ชำระเงิน</td>
          <td>1 Services</td>
          <td align="center">
            <button type="button" class="btn btn-outline-secondary btn-sm">Check In</button>
            <button type="button" class="btn btn-outline-secondary btn-sm" disabled>Check Out</button>
          </td>
        </tr>
        <tr>
          <td>Rangsiman</td>
          <td>101</td>
          <td>7/11/2018</td>
          <td>10/11/2018</td>
          <td>ชำระเงินเรียบร้อยแล้ว</td>
          <td>No Service</td>
          <td align="center">
            <button type="button" class="btn btn-outline-secondary btn-sm">Check In</button>
            <button type="button" class="btn btn-outline-secondary btn-sm" disabled>Check Out</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--================ End Promotion =================-->     

<!--================ Modal guestService =================--> 
<div class="modal fade" id="guestService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addGuestService">Add Guest's Service</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col">
                      <div class="form-group row">
                          <label for="price" class="col-sm-4 col-form-label">Room no.</label>
                          <div class="col-sm-8"><input type="text" class="form-control" id="service_room_no" placeholder="101"></div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group row">
                          <label for="price" class="col-sm-4 col-form-label">Guest's Name</label>
                          <div class="col-sm-8"><input type="text" class="form-control" id="service_guest_name" placeholder="ขึ้นชื่อแขกอัตโนมัติ" disabled></div>
                      </div>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col">
                      <div class="form-group row">
                          <label for="nights" class="col-sm-4 col-form-label">Service</label>
                          <div class="col-sm-8">
                              <select class="form-control form-control-sm" >
                                  <option>อาหารภายในห้องพัก</option>
                                  <option>ของใช้ภายในห้องพัก</option>
                                  <option>อุปกรณ์อื่นๆ ภายในห้องพัก</option>
                                  <option>อาหารส่วนกลาง</option>
                                  <option>ของใช้ส่วนกลาง</option>
                                  <option>อุปกรณ์อื่นๆ ส่วนกลาง</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group row">
                          <label for="nights" class="col-sm-4 col-form-label">Date</label>
                          <div class="col-sm-8"><input type="text" class="form-control" id="sercice_date" placeholder="วันที่และเวลาปัจจุบัน อัตโนมัติ" disabled></div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col">
                      <div class="form-group">
                          <label for="comment">Note:</label>
                          <textarea class="form-control" rows="5" id="service_comment"></textarea>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add</button>
          </div>
        </div>
      </div>
  </div>
<!--================ End Modal guestService =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>