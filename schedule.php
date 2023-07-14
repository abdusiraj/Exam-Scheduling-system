<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Exam Schedule</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="dist/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Exam Schedule</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="schedule.php">Schedule</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="row gx-4 gx-lg-5">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Exam Schedule</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Exam Type</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Exam Room</th>
                                           
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Semister</th>
                                            <th scope="col">Year</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php 
                                        include('connection.php');
                                        $sql1 = "SELECT * FROM schedule sl INNER JOIN semister sm ON sl.sem = sm.sem and sl.year = sm.year  where sm.status =1";
                   
                                        $run1=$con->query($sql1);
                                        while($row1=$run1->fetch_assoc()){
                                        $num_row = $run1->num_rows;
                                        // $dep = $row1['dep'];
                                         $type= $row1['type'];
                                         $course= $row1['course'];
                                         $room= $row1['room'];
                                         $sem= $row1['sem'];
                                         $year= $row1['year'];
                                        
                                         $date= $row1['date'];
                                         $time= $row1['time'];
                                        ?>
                                    <tbody>
                                       
                                        <?php if($num_row == 0){ ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>No exam Schedule yet..</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                            <?php } 
                                            else {
                                            ?>
                                        <tr>
                                            
                                            <td><?php echo $course; ?></td>
                                            <td><?php echo $type; ?></td>
                                           <td></td>
                                            <td><?php echo $room; ?></td>
                                            
                                           
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $time; ?></td>
                                            <td><?php echo $sem; ?></td>
                                            <td><?php echo $year; ?></td>
                                            
                                        </tr>
                                       <?php 
                                       } 
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </header>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="dist/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
