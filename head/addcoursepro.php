<?php  
include ('../connection.php');
session_start();
$sem=$_POST['sem'];
$ccode=$_POST['ccode']; 

$cname=$_POST['cname']; 


$con = new mysqli("localhost","root","","exam");
$sql = "INSERT INTO `course`(`c_code`, `name`,  `sem`) VALUES ('".$ccode."','".$cname."','".$sem."')";
$run = $con->query($sql);



if($run ==true)
{
//header("Location:admin/index.php");
                            /*        echo '<script language="javascript">';
                                    echo 'alert("Department Created Succefully")';
                                    echo '</script>';*/
                                    echo '<meta http-equiv="refresh" content="0;url=managecourse.php" />';
                            }

  else{
      echo "something error occure".$con->error;
      
  }
?>