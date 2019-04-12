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

    <title>HotelCloud - Rooms, Services and Promotion</title>
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
            <a class="nav-link" href="dashboard.html">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Management
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="reservation.html">Reservations</a>
                <a class="dropdown-item" href="/Service">Services</a>
                <a class="dropdown-item" href="/Guest">Guest</a>
                <a class="dropdown-item" href="stock.html">Stock</a>
                <a class="dropdown-item" href="/">Staff</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="report.html">Bookings Report</a>
              </div>
          </li>
          
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="/Setting" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Setting<span class="sr-only">(current)</span> 
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
          <button type="button" class="btn btn-outline-danger">Log Out</button>
        </form>
      </div>
    </nav>
    <!--================ End Nav Bar =================--> 

<!--================ Promotion Setting =================--> 
<div class="container">
    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
        <h2>Promotion</h2>
        <div class="input-group">
    
          <div class="btn-group mr-2" role="group" aria-label="Second group">
          <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#newPromo"><ion-icon name="add-circle-outline"></ion-icon>New Promotion</button>
          </form>
          </div>
        </div>
      </div>
    
    <!-- เดี๋ยวเค้าจะมาแก้ให้มันเป็น scroll ขึ้นลงอีกทีจ้า :เอิน -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Promotion Name</th>
          <th>Promotion Code</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Discount</th>
          <th>Status</th> <!-- ส่วนนี้คือมันต้องเปลีย่นเป็นหมดอายุอัตโนมัติ ถ้าเลยวันที่ใช้คูปองที่กำหนดไว้อ่ะ -->
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>October 2018</td>
          <td>OCT2018</td>
          <td>1/10/2018</td>
          <td>31/10/2018</td>
          <td>5%</td>
          <td>Expired</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editPromo"></ion-icon>
          </td>
        </tr>
        <tr>
          <td>November 2018</td>
          <td>NOV2018</td>
          <td>1/11/2018</td>
          <td>30/11/2018</td>
          <td>5%</td>
          <td>Available</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editPromo"></ion-icon>
          </td>
        </tr>
        <tr>
          <td>Post IG/FB</td>
          <td>POSTSOCIAL2018</td>
          <td>1/6/2018</td>
          <td>31/12/2018</td>
          <td>5%</td>
          <td>Available</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editPromo"></ion-icon>
          </td>
        </tr>
        <tr>
          <td>Walk in promotion</td>
          <td>WALKIN2018</td>
          <td>1/1/2018</td>
          <td>31/12/2018</td>
          <td>15%</td>
          <td>Available</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editPromo"></ion-icon>
          </td>
        </tr>
        <tr>
          <td>Long stay</td>
          <td>LONGSTAY2018</td>
          <td>1/1/2018</td>
          <td>31/12/2018</td>
          <td>10%</td>
          <td>Available</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editPromo"></ion-icon>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--================ End Promotion =================--> 

<!--================ Modal New Promo =================--> 
<div class="modal fade" id="newPromo" tabindex="-1" role="dialog" aria-labelledby="addNewPromo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewPromo">Add New Promotion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <div class="row">
                <div class="col">
                  <div class="form-group row">
                    <label for="promo__name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="promo_name"></div>
                  </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                      <label for="promo__code" class="col-sm-4 col-form-label">PromoCode</label>
                      <div class="col-sm-8"><input type="text" class="form-control" id="promo_code"></div>
                    </div>
                  </div>  
              </div> 

            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label for="promo_discount" class="col-sm-4 col-form-label">Discount</label>
                          <div class="col-sm-8 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="promo_discount">
                            </div>
                          </div> 
                    </div>
                </div>  
                <div class="col">
                  <div class="form-group row">
                      <label for="promo_unit" class="col-sm-4 col-form-label">Unit</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="promo_unit">
                          <option>-- Select --</option>
                          <option>Bath</option>
                          <option>Percentage</option>
                        </select>
                      </div>
                  </div>
              </div> 
            </div>   

              <div class="row">
                  <div class="col">
                      <div class="form-group row">
                        <label for="promo_dateStart" class="col-sm-4 col-form-label">Start</label>
                          <div class="col-sm-8 my-1">
                            <input id="promo_datepickerStart" width="135" />
                          </div> 
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group row">
                        <label for="promo_dateEnd" class="col-sm-4 col-form-label">End</label>
                          <div class="col-sm-8 my-1">
                            <input id="promo_datepickerEnd" width="135" />
                          </div> 
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                      <label for="promo_note">Note:</label>
                      <textarea class="form-control" rows="3" id="promo_note"></textarea>
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
<!--================ End Modal New Promo =================--> 

<!--================ Modal Edit Promo =================--> 
<div class="modal fade" id="editPromo" tabindex="-1" role="dialog" aria-labelledby="editPromo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editPromo">Edit Promotion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <div class="row">
                <div class="col">
                  <div class="form-group row">
                    <label for="promo_name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="promo_name" disabled></div>
                  </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                      <label for="promo_code" class="col-sm-4 col-form-label">PromoCode</label>
                      <div class="col-sm-8"><input type="text" class="form-control" id="promo_code" disabled></div>
                    </div>
                  </div>  
              </div> 

            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label for="promo_discount" class="col-sm-4 col-form-label">Discount</label>
                          <div class="col-sm-8 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="promo_discount">
                            </div>
                          </div> 
                    </div>
                </div>  
                <div class="col">
                  <div class="form-group row">
                      <label for="promo_unit" class="col-sm-4 col-form-label">Unit</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="promo_unit">
                          <option>-- Select --</option>
                          <option>Bath</option>
                          <option>Percentage</option>
                        </select>
                      </div>
                  </div>
              </div> 
            </div>   

            <div class="row">
                  <div class="col">
                      <div class="form-group row">
                        <label for="promo_dateStart" class="col-sm-4 col-form-label">Start</label>
                          <div class="col-sm-8 my-1">
                            <input id="editPromo_datepickerStart" width="135" />
                          </div> 
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group row">
                        <label for="promo_dateEnd" class="col-sm-4 col-form-label">End</label>
                          <div class="col-sm-8 my-1">
                            <input id="editPromo_datepickerEnd" width="135" />
                          </div> 
                      </div>
                  </div>
            </div>
            
            <div class="row">
                <div class="col">
                  <div class="form-group">
                      <label for="promo_note">Note:</label>
                      <textarea class="form-control" rows="3" id="promo_note"></textarea>
                  </div>
                </div>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
<!--================ End Modal Edit Promo =================--> 

<br><br><br>

<!--================ Room Setting =================--> 
      <div class="container">
          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <h2>Rooms</h2>
              <div class="input-group">
                
                <div class="btn-group mr-2" role="group" aria-label="First group">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search Room" aria-label="Search">
                  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>  
                </div>
             
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#newType"><ion-icon name="add-circle-outline"></ion-icon>New Type</button>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#spePrice"><ion-icon name="checkmark-circle-outline"></ion-icon>Special Prices</button>
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#newRoom"><ion-icon name="add-circle-outline"></ion-icon>New Room</button>
                </form>
                </div>
              </div>
            </div>

          <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>      
          <!-- เดี๋ยวเค้าจะมาแก้ให้มันเป็น scroll ขึ้นลงอีกทีจ้า :เอิน -->      
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Room Name</th>
                <th>Room Type</th>
                <th>Price</th>
                <th>Special Price</th>
                <th>Status</th>
                <th>Edit / Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tulip</td>
                <td>Standard Room</td>
                <td>1,000 ฿</td>
                <td>1,500 ฿</td>
                <td>Available</td>
                <td align="center">
                  <ion-icon name="create" data-toggle="modal" data-target="#editRoom"></ion-icon>
                  <ion-icon name="trash"></ion-icon>
                </td>
              </tr>
              <tr>
                <td>Rose</td>
                <td>Deluxe Room</td>
                <td>1,500 ฿</td>
                <td>2,000 ฿</td>
                <td><ion-icon name="build"></ion-icon> Maintenance</td>
                <td align="center">
                  <ion-icon name="create" data-toggle="modal" data-target="#editRoom"></ion-icon>
                  <ion-icon name="trash"></ion-icon>
                </td>
              </tr>
              <tr>
                <td>Orchid</td>
                <td>Suite</td>
                <td>2,500 ฿</td>
                <td>3,500 ฿</td>
                <td>Available</td>
                <td align="center">
                  <ion-icon name="create" data-toggle="modal" data-target="#editRoom"></ion-icon>
                  <ion-icon name="trash"></ion-icon>
                </td>
              </tr>
              <tr>
                <td>Hydrangea</td>
                <td>Joint Room</td>
                <td>1,000 ฿</td>
                <td>1,500 ฿</td>
                <td>Available</td>
                <td align="center">
                  <ion-icon name="create" data-toggle="modal" data-target="#editRoom"></ion-icon>
                  <ion-icon name="trash"></ion-icon>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
<!--================ End Room Setting =================--> 

<!--================ Modal New Room Type =================--> 
<div class="modal fade" id="newType" tabindex="-1" role="dialog" aria-labelledby="addNewRoomType" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewRoomType">Add New Room Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> <!-- ส่วนนี้จริงๆ ต้องดึงข้อมูลมาจาก DB ส่วน "Room Type" มาแสดง -->
          <div class="row">
            <div class="col">
                Standard Room
            </div>
            <div class="col">
              <ion-icon name="trash"></ion-icon> <!-- อันนี้ต้องเขียนแบบว่า room ไหนมีกาารใช้ type นั้นอยู่ ก็จะกดลบไม่ได้ด้วยปะ-->
            </div>
          </div>
          <div class="row">
            <div class="col">
                Deluxe Room
            </div>
            <div class="col">
              <ion-icon name="trash"></ion-icon> <!-- อันนี้ต้องเขียนแบบว่า room ไหนมีกาารใช้ type นั้นอยู่ ก็จะกดลบไม่ได้ด้วยปะ-->
            </div>
          </div>
          <div class="row">
            <div class="col">
                Joint Room
            </div>
            <div class="col">
              <ion-icon name="trash"></ion-icon> <!-- อันนี้ต้องเขียนแบบว่า room ไหนมีกาารใช้ type นั้นอยู่ ก็จะกดลบไม่ได้ด้วยปะ-->
            </div>
          </div>
          <div class="row">
            <div class="col">
                Suite
            </div>
            <div class="col">
              <ion-icon name="trash"></ion-icon> <!-- อันนี้ต้องเขียนแบบว่า room ไหนมีกาารใช้ type นั้นอยู่ ก็จะกดลบไม่ได้ด้วยปะ-->
            </div>
          </div>
        <br> 
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">New Room Type: </span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="roomType">
            <!-- ส่วนนี้ จะรับข้อมูลแล้วเอาไปแสดงด้านบน -->
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
<!--================ End Modal New Room Type =================--> 

<!--================ Modal Special Prices =================--> 
<div class="modal fade" id="spePrice" tabindex="-1" role="dialog" aria-labelledby="spePriceSet" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="spePriceSet">Special Price Setting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <b>Select the days when your room have different price such as Friday, Saturday, Sunday</b> <br><br>
          <div class="row"> 
            <div class="col">
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="mon" >Monday
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="tue" >Tuesday
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="wed" >Wednesday
              </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="thu" >Thursday
                </label>
            </div>
            </div>
          </div> 

          <div class="row"> 
              <div class="col">
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="fri" >Friday
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="sat" >Saturday
                </label>
              </div>
              <div class="form-check-inline disabled">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="sun" >Sunday
                </label>
              </div>
            </div> 
            </div> 
        
            <br><br> <b>Select the days when your room have different price for High Season </b><br><br>
            <div class="row">
              <div class="col">                      
                <div class="form-group row">  
                  <div class="col">
                      <div class="form-group row">
                        <label for="HignSeasonStart" class="col-sm-4 col-form-label">High Season Start</label>
                        <div class="col-sm-8"><input id="datepicker_HignSeasonStart" width="235" /></div>
                      </div>
                  </div>
                </div>
              </div> 
              <div class="col">
                  <div class="form-group row">  
                    <div class="col">
                        <div class="form-group row">
                          <label for="HignSeasonEnd" class="col-sm-4 col-form-label">High Season End</label>
                          <div class="col-sm-8"><input id="datepicker_HignSeasonEnd" width="235" /></div>
                        </div>
                    </div>
                  </div>
              </div>
          </div> 

        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--================ End Modal Special Prices =================--> 

<!--================ Modal New Room =================--> 
<div class="modal fade" id="newRoom" tabindex="-1" role="dialog" aria-labelledby="addNewRoom" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewRoom">Add New Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form action=""> <!-- action here -->

            <div class="row">
              <div class="col">
                <div class="form-group row">
                  <label for="room_name" class="col-sm-4 col-form-label">Room</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="room_name">
                    <small class="form-text text-muted">Fill the Room's Name or Room's number</small>
                  </div>
                </div>
              </div>
              <div class="col">
                  <div class="form-group row">
                      <label for="room_type" class="col-sm-4 col-form-label">Room Type</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="roomType"> <!-- ส่วนนี้ต้องดึงข้อมูลจาก room type ที่ผู้ใช้ตั้งค่า มาแสดง-->
                          <option>-- Select --</option>
                          <option value="">Standard Room</option>
                          <option value="">Deluxe Room</option>
                          <option value="">Suite</option>
                          <option value="">Joint Room</option>
                        </select>
                      </div>
                  </div>
              </div>  
            </div>   

            <div class="row">
                <div class="col">
                    <div class="form-group row">
                      <label for="room_price" class="col-sm-4 col-form-label">Normal Price</label>
                        <div class="col-sm-8 my-1">
                          <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="room_price">
                            <div class="input-group-prepend">
                                <div class="input-group-text">฿</div>
                            </div>
                          </div>
                        </div> 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                      <label for="room_specialPrice" class="col-sm-4 col-form-label">Special Price</label>
                        <div class="col-sm-8 my-1">
                          <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="room_specialPrice">
                            <div class="input-group-prepend">
                                <div class="input-group-text">฿</div>
                            </div>
                          </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group row">
                      <label for="room_seasonPrice" class="col-sm-4 col-form-label">High Season Price</label>
                        <div class="col-sm-8 my-1">
                          <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="room_seasonPrice">
                            <div class="input-group-prepend">
                                <div class="input-group-text">฿</div>
                            </div>
                          </div>
                        </div> 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="room_status" class="col-sm-4 col-form-label">Room Status</label>
                        <div class="col-sm-8">
                          <select class="form-control" id="room_status">
                            <option>-- Select --</option>
                            <option>Available</option>
                            <option>Maintenance</option>
                          </select>
                        </div>
                    </div>
                </div> 
            </div>  
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>        
<!--================ End Modal New Room =================--> 

<!--================ Modal Edit Room =================--> 
<div class="modal fade" id="editRoom" tabindex="-1" role="dialog" aria-labelledby="editRoom" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editRoom">Edit Room</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
            <form action=""> <!-- action here -->
  
              <div class="row">
                <div class="col">
                  <div class="form-group row">
                    <label for="room_name" class="col-sm-4 col-form-label">Room</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="room_name">
                      <small id="emailHelp" class="form-text text-muted">Fill the Room's Name or Room's number</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="room_type" class="col-sm-4 col-form-label">Room Type</label>
                        <div class="col-sm-8">
                          <select class="form-control" id="roomType"> <!-- ส่วนนี้ต้องดึงข้อมูลจาก room type ที่ผู้ใช้ตั้งค่า มาแสดง-->
                            <option>-- Select --</option>
                            <option value="">Standard Room</option>
                            <option value="">Deluxe Room</option>
                            <option value="">Suite</option>
                            <option value="">Joint Room</option>
                          </select>
                        </div>
                    </div>
                </div>  
              </div>   
  
              <div class="row">
                  <div class="col">
                      <div class="form-group row">
                        <label for="room_price" class="col-sm-4 col-form-label">Normal Price</label>
                          <div class="col-sm-8 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="room_price">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">฿</div>
                              </div>
                            </div>
                          </div> 
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group row">
                        <label for="room_specialPrice" class="col-sm-4 col-form-label">Special Price</label>
                          <div class="col-sm-8 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="room_specialPrice">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">฿</div>
                              </div>
                            </div>
                          </div> 
                      </div>
                  </div>
              </div>
  
              <div class="row">
                  <div class="col">
                      <div class="form-group row">
                        <label for="room_seasonPrice" class="col-sm-4 col-form-label">High Season Price</label>
                          <div class="col-sm-8 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="room_seasonPrice">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">฿</div>
                              </div>
                            </div>
                          </div> 
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group row">
                          <label for="room_status" class="col-sm-4 col-form-label">Room Status</label>
                          <div class="col-sm-8">
                            <select class="form-control" id="room_status">
                              <option>-- Select --</option>
                              <option>Available</option>
                              <option>Maintenance</option>
                            </select>
                          </div>
                      </div>
                  </div> 
              </div>  
            </form>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>        
  <!--================ End Modal Edit Room =================--> 

<br><br><br>

<!--================ Service Setting =================--> 
<div class="container">
    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
        <h2>Services</h2>
        <div class="input-group">
          <!-- Button to Open the "Add Staff" Modal -->
          <div class="btn-group mr-2" role="group" aria-label="Second group">
          <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#newServiceType"><ion-icon name="add-circle-outline"></ion-icon>New Type</button>
              <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#newService"><ion-icon name="add-circle-outline"></ion-icon>New Service</button>
          </form>
          </div>
          </div>
        </div>
    </div>

    <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p> 
    <!-- เดี๋ยวเค้าจะมาแก้ให้มันเป็น scroll ขึ้นลงอีกทีจ้า :เอิน -->           
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Service Name</th>
          <th>Service Type</th>
          <th>Price (/time)</th>
          <th>Status</th>
          <th>Edit / Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Car</td>
          <td>Additional</td>
          <td>1,000 ฿</td>
          <td>Available</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editService"></ion-icon>
            <ion-icon name="trash"></ion-icon>
          </td>
        </tr>
        <tr>
          <td>Flowers</td>
          <td>Each Room</td>
          <td>0 ฿</td>
          <td><ion-icon name="build"></ion-icon> Not Available</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editService"></ion-icon>
            <ion-icon name="trash"></ion-icon>
          </td>
        </tr>
        <tr>
          <td>Steak</td>
          <td>Room Services</td>
          <td>569 ฿</td>
          <td>Available</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editService"></ion-icon>
            <ion-icon name="trash"></ion-icon>
          </td>
        </tr>
        <tr>
          <td>Jean</td>
          <td>Laundry</td>
          <td>80 ฿</td>
          <td>Available</td>
          <td align="center">
            <ion-icon name="create" data-toggle="modal" data-target="#editService"></ion-icon>
            <ion-icon name="trash"></ion-icon>
          </td>
        </tr>
      </tbody>
    </table>

</div>
<!--================ End Service Setting =================--> 

<!--================ Modal New Service Type =================--> 
<div class="modal fade" id="newServiceType" tabindex="-1" role="dialog" aria-labelledby="addNewServiceType" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewServiceType">Add New Service Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> <!-- ส่วนนี้จริงๆ ต้องดึงข้อมูลมาจาก DB ส่วน "Service Type" มาแสดง -->
          <div class="row">
            <div class="col">
              Each Room
            </div>
            <div class="col">
              <ion-icon name="trash"></ion-icon> <!-- อันนี้ต้องเขียนแบบว่า type ไหนมีกาารใช้ service นั้นอยู่ ก็จะกดลบไม่ได้ด้วยปะ-->
            </div>
          </div>
          <div class="row">
            <div class="col">
                Room Service
            </div>
            <div class="col">
              <ion-icon name="trash"></ion-icon> <!-- อันนี้ต้องเขียนแบบว่า type ไหนมีกาารใช้ service นั้นอยู่ ก็จะกดลบไม่ได้ด้วยปะ-->
            </div>
          </div>
          <div class="row">
              <div class="col">
                Laundry
              </div>
              <div class="col">
                <ion-icon name="trash"></ion-icon> <!-- อันนี้ต้องเขียนแบบว่า type ไหนมีกาารใช้ service นั้นอยู่ ก็จะกดลบไม่ได้ด้วยปะ-->
              </div>
          </div>
          <div class="row">
            <div class="col">
                Additional
            </div>
            <div class="col">
              <ion-icon name="trash"></ion-icon> <!-- อันนี้ต้องเขียนแบบว่า type ไหนมีกาารใช้ service นั้นอยู่ ก็จะกดลบไม่ได้ด้วยปะ-->
            </div>
          </div>
          <br>
          <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="serviceType">New Service Type: </span>
              </div>
              <input type="text" class="form-control" aria-label="Small" aria-describedby="serviceType" id="serviceType">
              <!-- ส่วนนี้ จะรับข้อมูลแล้วเอาไปแสดงด้านบน -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
</div>
<!--================ End Modal New Service Type =================--> 

<!--================ Modal New Service =================--> 
<div class="modal fade" id="newService" tabindex="-1" role="dialog" aria-labelledby="addNewService" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewService">Add New Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form action=""> <!-- action here -->

              <div class="row">
                <div class="col">
                  <div class="form-group row">
                    <label for="service_name" class="col-sm-4 col-form-label">Service Name</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="service_name"></div>
                  </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="service_type" class="col-sm-4 col-form-label">Service Type</label>
                        <div class="col-sm-8">
                          <select class="form-control" id="service_type">
                            <option>-- Select --</option>
                            <option>Each Room</option>
                            <option>Room Service</option>
                            <option>Laundry</option>
                            <option>Additional</option>
                          </select>
                        </div>
                    </div>
                </div>  
              </div>   

              <div class="row">
                  <div class="col">
                      <div class="form-group row">
                        <label for="service_price" class="col-sm-4 col-form-label">Price (/time)</label>
                          <div class="col-sm-8 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="service_price">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">฿</div>
                              </div>
                            </div>
                          </div> 
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group row">
                          <label for="service_status" class="col-sm-4 col-form-label">Status</label>
                          <div class="col-sm-8">
                            <select class="form-control" id="service_status">
                              <option>-- Select --</option>
                              <option>Available</option>
                              <option>Not Available</option>
                            </select>
                          </div>
                      </div>
                  </div> 
              </div>

            </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>        
<!--================ End Modal New Service =================--> 

<!--================ Modal Edit Service =================--> 
<div class="modal fade" id="editService" tabindex="-1" role="dialog" aria-labelledby="editService" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editService">Edit Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form action=""> <!-- action here -->

              <div class="row">
                <div class="col">
                  <div class="form-group row">
                    <label for="service_name" class="col-sm-4 col-form-label">Service Name</label>
                    <div class="col-sm-8"><input type="text" class="form-control" id="service_name"></div>
                  </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="service_type" class="col-sm-4 col-form-label">Service Type</label>
                        <div class="col-sm-8">
                          <select class="form-control" id="service_type">
                            <option>-- Select --</option>
                            <option>Each Room</option>
                            <option>Room Service</option>
                            <option>Laundry</option>
                            <option>Additional</option>
                          </select>
                        </div>
                    </div>
                </div>  
              </div>   

              <div class="row">
                  <div class="col">
                      <div class="form-group row">
                        <label for="service_price" class="col-sm-4 col-form-label">Price (/time)</label>
                          <div class="col-sm-8 my-1">
                            <label class="sr-only" for="inlineFormInputGroupUsername"></label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="service_price">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">฿</div>
                              </div>
                            </div>
                          </div> 
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group row">
                          <label for="service_status" class="col-sm-4 col-form-label">Status</label>
                          <div class="col-sm-8">
                            <select class="form-control" id="service_status">
                              <option>-- Select --</option>
                              <option>Available</option>
                              <option>Not Available</option>
                            </select>
                          </div>
                      </div>
                  </div> 
              </div>

            </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>        
<!--================ End Modal Edit Service =================--> 

    <!-- Optional JavaScript -->

    <!-- DOB JavaScript -->
    <script>
        $('#datepicker_HignSeasonStart').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker_HignSeasonEnd').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#promo_datepickerStart').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#promo_datepickerEnd').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#editPromo_datepickerStart').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#editPromo_datepickerEnd').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>