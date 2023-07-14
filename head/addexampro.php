<?php  
include ('../connection.php');
session_start();
$sem=$_POST['sem'];
$year=$_POST['year']; 

$type=$_POST['type']; 


$con = new mysqli("localhost","root","","exam");
$sql = "INSERT INTO `m_exam`(`type`, `sem`, `year`) VALUES ('".$type."','".$sem."','".$year."')";
$run = $con->query($sql);



if($run ==true)
{
//header("Location:admin/index.php");
                            /*        echo '<script language="javascript">';
                                    echo 'alert("Department Created Succefully")';
                                    echo '</script>';*/
                                    echo '<meta http-equiv="refresh" content="0;url=exam.php" />';
                            }

  else{
      echo "something error occure".$con->error;
      
  }
?>