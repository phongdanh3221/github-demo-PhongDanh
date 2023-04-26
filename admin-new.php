<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>

  <!-- loader-->
  <link href="/js/dashtreme-master/assets/css/pace.min.css" rel="stylesheet" />
  <script src="/js/dashtreme-master/assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="/js/dashtreme-master/assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="js/dashtreme-master/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="js/dashtreme-master/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="js/dashtreme-master/assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="js/dashtreme-master/assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="js/dashtreme-master/assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="js/dashtreme-master/assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="js/dashtreme-master/assets/css/app-style.css" rel="stylesheet" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <title>Document</title>
  <?php
  include "database.php";
  include "uploadimage.php";
  $kq = connectDB("SELECT id, image, price, amount FROM giaynike");
  if (isset($_GET['edit']))
    $key = $_GET['edit'];
  if (isset($_GET["del"]) && $_GET["del"]) {
    $delId = $_GET['del'];
    deleteDB($delId);
    header("Location: admin-new.php");
  }
  if (isset($_POST["editProduct"]) && ($_POST["editProduct"])) {
    $id = $_POST['id'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    ///////
    updateDB("UPDATE giaynike SET  image='$image', price='$price' , amount='$amount' WHERE id='$id'");
    // $sql = "INSERT INTO dienthoai (id,tensanpham,gia,imageurl) VALUES ('$id','$name','$price','$img')";
    // $conn->exec($sql);  
    header("Location: admin-new.php");
  }
  if (isset($_POST["addProduct"]) && ($_POST["addProduct"])) {
    $id = $_POST['id'];
    // $image = $_POST['image'];
    $image = uploadimage();
    $price = $_POST["price"];
    $amount = 1;
    insertDB("INSERT INTO giaynike (id,price,image,amount) VALUES ('$id','$price','$image','$amount')");
    header("Location: admin-new.php");
  }
  ?>
</head>

<body class="bg-theme bg-theme1">

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="index.html">
          <img src="images/logo-icon.png" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">Dashtreme Admin</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="index.html">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="icons.html">
            <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
          </a>
        </li>

        <li>
          <a href="forms.html">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
          </a>
        </li>

        <li>
          <a href="tables.html">
            <i class="zmdi zmdi-grid"></i> <span>Tables</span>
          </a>
        </li>

        <li>
          <a href="calendar.html">
            <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
            <small class="badge float-right badge-light">New</small>
          </a>
        </li>

        <li>
          <a href="profile.html">
            <i class="zmdi zmdi-face"></i> <span>Profile</span>
          </a>
        </li>

        <li>
          <a href="login.html" target="_blank">
            <i class="zmdi zmdi-lock"></i> <span>Login</span>
          </a>
        </li>

        <li>
          <a href="register.html" target="_blank">
            <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
          </a>
        </li>

        <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

      </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
      <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <form class="search-bar">
              <input type="text" class="form-control" placeholder="Enter keywords">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
          </li>
        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
          <li class="nav-item dropdown-lg">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
              <i class="fa fa-envelope-open-o"></i></a>
          </li>
          <li class="nav-item dropdown-lg">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
              <i class="fa fa-bell-o"></i></a>
          </li>
          <li class="nav-item language">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
              <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
              <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
              <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
              <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-item user-details">
                <a href="javaScript:void();">
                  <div class="media">
                    <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                    <div class="media-body">
                      <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                      <p class="user-subtitle">mccoy@example.com</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">

        <!--Start Dashboard Content-->

        <div class="card mt-3">
          <div class="card-content">
            <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width:55%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width:55%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width:55%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width:55%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-8 col-xl-8">
            <div class="card">
              <div class="card-header">Site Traffic
                <div class="card-action">
                  <div class="dropdown">
                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                      <i class="icon-options"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="javascript:void();">Action</a>
                      <a class="dropdown-item" href="javascript:void();">Another action</a>
                      <a class="dropdown-item" href="javascript:void();">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:void();">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New Visitor</li>
                  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old Visitor</li>
                </ul>
                <div class="chart-container-1">
                  <canvas id="chart1"></canvas>
                </div>
              </div>

              <div class="row m-0 row-group text-center border-top border-light-3">
                <div class="col-12 col-lg-4">
                  <div class="p-3">
                    <h5 class="mb-0">45.87M</h5>
                    <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="p-3">
                    <h5 class="mb-0">15:48</h5>
                    <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="p-3">
                    <h5 class="mb-0">245.65</h5>
                    <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-12 col-lg-4 col-xl-4">
            <div class="card">
              <div class="card-header">Weekly sales
                <div class="card-action">
                  <div class="dropdown">
                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                      <i class="icon-options"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="javascript:void();">Action</a>
                      <a class="dropdown-item" href="javascript:void();">Another action</a>
                      <a class="dropdown-item" href="javascript:void();">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:void();">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container-2">
                  <canvas id="chart2"></canvas>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center">
                  <tbody>
                    <tr>
                      <td><i class="fa fa-circle text-white mr-2"></i> Direct</td>
                      <td>$5856</td>
                      <td>+55%</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-circle text-light-1 mr-2"></i>Affiliate</td>
                      <td>$2602</td>
                      <td>+25%</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-circle text-light-2 mr-2"></i>E-mail</td>
                      <td>$1802</td>
                      <td>+15%</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                      <td>$1105</td>
                      <td>+5%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!--End Row-->

        <div class="row">
          <div class="col-12 col-lg-12">
            <div class="card">
              <div class="card-header">Products - Nike
                <div class="card-action">
                  <div class="dropdown">
                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                      <i class="icon-options"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="javascript:void();">Action</a>
                      <a class="dropdown-item" href="javascript:void();">Another action</a>
                      <a class="dropdown-item" href="javascript:void();">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript:void();">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="table-responsive">
              <form action="" method="post" class="m-4" enctype="multipart/form-data">
                <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   
                      <div class="row">
                        <div class="col-6">
                          <label class="form-label">Nhập ID sản phẩm</label>
                          <input class="form-control" type="text" name="id" value="<?php if (isset($key)) echo $kq[$key]['id'] ?>">
                          <label class="form-label">Số lượng mua</label>
                          <input class="form-control" type="text" name="amount" value="1">
                          <br>
                          <input type="submit" class="btn btn-primary" name="addProduct" value="Thêm sản phẩm">
                          <input type="submit" class="btn btn-warning" name="editProduct" value="Cập nhật sản phẩm">

                        </div>
                        <div class="col-6">
                          <label class="form-label">Nhập URL hình ảnh</label>
                          <input disabled type="text" class="w-40 form-control " name="image" value="<?php if (isset($index)) echo $kq[$key]['image'] ?>">
                          <input type="file" class="form-control" name="fileToUpload">
                          <br>
                          <label class="form-label">Giá sản phẩm</label>
                          <input class="form-control" type="text" name="price" value=<?php if (isset($key)) echo $kq[$key]['price'] ?>>
                        </div>
                      </div>

                    <div class="card m-4 shadow">
                        <table class="table table-sm">
                          <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th></th>
                          </tr>
                          <tr>
                            <?php
                            foreach ($kq as $key => $item) {
                              $stt = $key + 1;
                              echo "
                                <tr>
                                    <td>$stt</td>
                                    <td>" . $item["id"] . "</td>
                                    <td><img src='" . $item["image"] . "' width='100px'></td>
                                    <td>" . $item["price"] . "</td>
                                    <td>
                                    <a href='admin-new.php?del=" . $item["id"] . "'>Delete</a>
                                    /
                                    <a href='admin-new.php?edit=" . $key . "'>Fix</td>
                                </tr>
                            ";
                            }
                            ?>
                          </tr>
                        </table>
                      </div>
                    </div>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </form>
        <!--End Row-->

        <!--End Dashboard Content-->

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

      </div>
      <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <!-- <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer> -->
    <!--End footer-->

    <!--start color switcher-->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
      </div>
      <div class="right-sidebar-content">

        <p class="mb-0">Gaussion Texture</p>
        <hr>

        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>

        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
          <li id="theme7"></li>
          <li id="theme8"></li>
          <li id="theme9"></li>
          <li id="theme10"></li>
          <li id="theme11"></li>
          <li id="theme12"></li>
          <li id="theme13"></li>
          <li id="theme14"></li>
          <li id="theme15"></li>
        </ul>

      </div>
    </div>
    <!--end color switcher-->

  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="js/dashtreme-master/assets/js/jquery.min.js"></script>
  <script src="js/dashtreme-master/assets/js/popper.min.js"></script>
  <script src="js/dashtreme-master/assets/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="js/dashtreme-master/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="js/dashtreme-master/assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="js/dashtreme-master/assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="js/dashtreme-master/assets/js/app-script.js"></script>
  <!-- Chart js -->

  <script src="js/dashtreme-master/assets/plugins/Chart.js/Chart.min.js"></script>

  <!-- Index js -->
  <script src="js/dashtreme-master/assets/js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>