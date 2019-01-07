
    <nav class="navbar navbar-expand-sm  navbar-light bg-light mb-3 " >
        <div class="container" style="margin-right: 45px" >
          <a class="navbar-brand " style=" margin-left: -100px; margin-bottom: -40px; margin-top: -40px " href="index.php"><img src="image/logo.png" height="65px" width="110"></a>
              <ul class="navbar-nav">
                  <li class="nav-item"  >
                      <a class="nav-link" style=" color: black; " href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" style=" color: black; " href="#">Books</a>
                  </li>
<!--                   <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    <div class="dropdown-menu">
                      <a href="#" class="dropdown-item">Link 1</a>
                      <a href="#" class="dropdown-item">Link 2</a>
                      <a href="#" class="dropdown-item">Link 3</a>
                    </div>
                  </li> -->
                  <li class="nav-item">
                      <a class="nav-link" style=" color: black; " href="addbook.php">Add Book</a>
                  </li class="nav-item">
                  <li class="nav-item">
                      <a class="nav-link" style=" color: black; margin-right: 15px; " href="profili.php">Profile</a>
                  </li>

                  <li class="nav-item">

                   <!--  <a class="nav-link" href="../CacttusEducation/logout.php"> <button class="btn btn-outline-dark btn-sm" type="button">Log Out</button></a> -->
                              <button class="btn btn-info" data-toggle="modal" data-target="#logOutModel" style="margin-top: 5px">Log Out</button>

                    <div class="modal" id="logOutModel">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Log Out</h5>
                            <button class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <h5>Are you sure you want to Log Out?</h5>
                           
                          </div>
                           <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">No</button>
                            <a class="nav-link" href="../CacttusEducation/func/logOut.php">Yes</a>
                           
                          </div>
                                       
                        </div>
                      </div>
                   </div>
              
                  </li>
              </ul>
          </div>
    </nav>