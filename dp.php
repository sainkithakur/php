<?php
 $conn =  mysqli_connect('localhost','root','','facebook');
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q =  mysqli_query($conn,"select * from users where email='$email' and password='$password'");

    if($q->num_rows > 0 )
    {
        $usersdata = mysqli_fetch_array($q);
       session_start();
      $_SESSION['LOIGIUSERS'] = $usersdata['id'];
      header("Location:fbprofile.php");
    
    }
    else{
      echo "Registration Failed";
    }
    
    
    }
    
    
    ?>
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

<style>
.body{
  background-color:skyblue;
}
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}





.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
background-color:red;
}
}




</style>



</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                      <form method="POST">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                          <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                          <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                          </button>
              
                          <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                          </button>
              
                          <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-linkedin-in"></i>
                          </button>
                        </div>
              
                        <div class="divider d-flex align-items-center my-4">
                          <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>
              
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                            placeholder="Enter a valid email address" />
                          <label class="form-label" for="form3Example3"value="email">email</label>
                        </div>
              
                        <!-- Password input -->
                        <div class="form-outline mb-3">
                          <input type="password" name="password"id="form3Example4" class="form-control form-control-lg"
                            placeholder="Enter password" />
                          
                            <label class="form-label" for="form3Example4"value="password
                          ">Password</label>
                        </div>
              
                        <div class="d-flex justify-content-between align-items-center">
                          <!-- Checkbox -->
                          <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                              Remember me
                            </label>
                          </div>
                          <a href="#!" class="text-body">Forgot password?</a>
                        </div>
              
                        <div class="text-center text-lg-start mt-4 pt-2">
                          <button type="submit" name="login" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;" value="login">Login</button>
                          <p class="small fw-bold mt-2 pt-1 mb-0"><a href="modal.php">Don't have an account?</p>
                            
                        </div>
              
                      </form>
                    </div>
                  </div>
                </div>
                <div
                  class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                  <!-- Copyright -->
                  <div class="text-white mb-3 mb-md-0">
                    Copyright © 2020. All rights reserved.
                  </div>
                  <!-- Copyright -->
              
                  <!-- Right -->
                  <div>
                    <a href="#!" class="text-white me-4">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#!" class="text-white me-4">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#!" class="text-white me-4">
                      <i class="fab fa-google"></i>
                    </a>
                    <a href="#!" class="text-white">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </div>
                  <!-- Right -->
                </div>
              </section>
   
            </div>
        </div>
    </div> 
</body>
</html>


