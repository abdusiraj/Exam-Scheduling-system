<?php  
include ('../connection.php');
session_start();
$sem=$_POST['sem'];
$year=$_POST['year']; 
$type=$_POST['type']; 
 
$cname=$_POST['cname']; 
$class=$_POST['class']; 
$ins=$_POST['ins'];
$ins2=$_POST['ins2'];
$date=$_POST['date']; 
$time=$_POST['time']; 


$con = new mysqli("localhost","root","","exam");
$sql = "INSERT INTO `schedule`(`type`, `course`, `sem`, `year`, `room`, `instructo_1`, `instructor_2`, `date`, `time`) VALUES ('".$type."','".$cname."','".$sem."','".$year."','".$class."','".$ins."','".$ins2."','".$date."','".$time."')";
$run = $con->query($sql);



if($run ==true)
{
//header("Location:admin/index.php");
                            /*        echo '<script language="javascript">';
                                    echo 'alert("Department Created Succefully")';
                                    echo '</script>';*/
                                    echo '<meta http-equiv="refresh" content="0;url=schedule.php" />';
                            }

  else{
      echo "something error occure".$con->error;
      
  }
?>