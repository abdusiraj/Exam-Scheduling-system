<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$head_user=$_SESSION['uname'];
$head_id=$_SESSION['hed_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Exam Schedule</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Dep_Page</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $head_user; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="exam.php" class="nav-item nav-link active"><i class="fa fa-file-alt me-2"></i>Manage Exam</a>
                    <a href="schedule.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Schedule</a>
                    <a href="semister.php" class="nav-item nav-link  "><i class="fa fa-keyboard me-2"></i>Manage Semister</a>
                    <a href="managecourse.php" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Manage Course</a>
                    
                        
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                    <?php  
                    include "../connection.php";
                      $sel = $con->query("SELECT * FROM `message` where `status`=0");
                      $row=$sel->num_rows;
                      ?>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <?php while( $selstdrow = $sel->fetch_assoc()){ ?>
                            <a href="messagepro.php?Id=<?php echo $selstdrow['id']; ?>" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0"></h6>
                                        <small><?php echo $selstdrow['content']; ?></small>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                            <hr class="dropdown-divider">
                            
                            <hr class="dropdown-divider">
                            <a href="messagepro.php" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $head_user; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            
                            <a href="../index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-9">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Exam List</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Exam Type</th>
                                        
                                        <th scope="col">Sem/Year</th>
                                        <th scope="col">Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                  
                            include "../connection.php";
                   
                   
                   //$sql="select * from `user` where u_type = `coordinator`";
                   $sql1 = "SELECT * FROM `m_exam`";
                   $run1=$con->query($sql1);
                   while($row1=$run1->fetch_assoc()){
                    $id = $row1['id'];
                    $type= $row1['type'];
                    $sem= $row1['sem'];
                    $year= $row1['year'];
                    
                    
                    //echo '<tr class="odd gradeX" id="rec">';
                     ?>
                                    <tr>
                                        <th scope="row"><?php echo $id; ?></th>
                                        <td><?php echo $type; ?></td>
                                        
                                        <td><?php echo $sem;echo" /";echo $year; ?></td>
                                        
                                       
                                        <td>
                                        <a rel="facebox" href="deleteexam.php?Id=<?php echo $row1['id']; ?>"  class="btn btn-sm btn-danger">delete</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                    <div class="col-sm-12 col-xl-3">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">ADD Exam</h6>
                            <form action="addexampro.php" method="post">
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Semister</label>  
                                 <?php
                                  $sql = "SELECT * FROM `semister` where `status`=1";
                                  $run=$con->query($sql);
                                  while($row=$run->fetch_assoc()){
                                   
                                   
                                   $sem= $row['sem'];
                                  
                                 ?>
                                
                                
                                    <input type="text" name="sem" class="form-control" readonly value="<?php echo $sem; ?>">  
                                  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Year</label>
                                    <input type="text" name="year" class="form-control" id="text" readonly value="<?php echo $row['year']; ?>">
                                </div>
                                <?php
                                  }
                                ?>
                               
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Exam Type</label>
                                    <select name="type" class="form-control form-control-sm" >
                                        <option>  </option>
                                        <option value="Midterm">Midterm  </option>
                                        <option value="Finalterm">Finalterm  </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <!-- Widgets End -->


            <!-- Footer Start -->
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>