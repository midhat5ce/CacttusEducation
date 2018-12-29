    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
          <a class="navbar-brand" href="#">Book Share</a>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Books</a>
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
                      <a class="nav-link" href="addbook.php">Add Book</a>
                  </li class="nav-item">
                  <li class="nav-item">
                      <a class="nav-link" href="profili.php">Profile</a>
                  </li>

                  <li class="nav-item">

                   <!--  <a class="nav-link" href="../CacttusEducation/logout.php"> <button class="btn btn-outline-dark btn-sm" type="button">Log Out</button></a> -->
                              <button class="btn btn-info" data-toggle="modal" data-target="#logOutModel">Log Out</button>

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