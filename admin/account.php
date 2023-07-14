<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$adm_user=$_SESSION['uname'];
$admin_id=$_SESSION['admin_id'];
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
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ADMIN PAGE</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $adm_user; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="account.php" class="nav-item nav-link active"><i class="fa fa-users me-2"></i>Manage Account</a>
                    <a href="class room.php" class="nav-item nav-link "><i class="fa fa-users me-2"></i>Manage Class Room</a>
                    
                    <a href="instructor.php" class="nav-item nav-link "><i class="fa fa-users me-2"></i>Instructor</a>
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
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $adm_user; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            
                            <a href="../index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <a class="btn bg-info mb-0" href="addacount.php"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add</a>
                        <hr class="divider">
                            <h6 class="mb-4">Account Table</h6>
                           
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            
                                            <th scope="col">Status</th>
                                            <th scope="col">Activity</th>
                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                   include "../connection.php";
                   
                   
                   //$sql="select * from `user` where u_type = `coordinator`";
                   $sql = "SELECT * FROM `head`";
                   $run=$con->query($sql);
                   while($row=$run->fetch_assoc()){
                    $id = $row['hed_id'];
                    $fname= $row['fname'];
                    $mname= $row['mname'];
                    $lname= $row['lname'];
                    $email= $row['email'];
                    
                 

                    //echo '<tr class="odd gradeX" id="rec">';
                     ?>
                                        
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $fname; echo " "; echo $mname;echo " "; echo $lname;?></td>
                                            
                                            <?php 
                                            $sql2 = "SELECT * FROM `user` where `email`='$email'";
                                            $run2=$con->query($sql2);
                                            $row2=$run2->fetch_assoc();
                                      
                        
                                            ?>
                                            <td class="align-middle">
                                          <?php if($row2['status'] == '1'): ?>
								              <span class="badge badge-sm bg-success">Active</span>
							              <?php elseif($row2['status'] == '0'): ?>
								               <span class="badge badge-sm bg-danger">Inactive</span>
							              <?php endif; ?>
                                         </td>

                                            <td class="align-middle text-sm">
                     
                                              <a rel="facebox" href="updateaccount.php?Id=<?php echo $row['email']; ?>" class="btn btn-sm btn-info">Update</a>
                                              <a rel="facebox" href="deleteaccount.php?Id=<?php echo $row['email']; ?>"  class="btn btn-sm btn-danger">delete</a>
                                            </td>
                      <td>
                    <div class="d-flex align-items-center">
                    <a href="active.php?Id=<?php echo $row2['email']; ?>" class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></a>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-white text-sm">Active</h6>
                    </div>
                  </div>

                  <div class="d-flex align-items-center">
                    <a href="deactive.php?Id=<?php echo $row2['email']; ?>"  class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></a>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-white text-sm">Inactive</h6>
                    </div>
                  </div>
                                          </td>

                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->


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