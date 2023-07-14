<?php  
include ('../connection.php');
session_start();
$id=$_POST['id'];
$depname=$_POST['depname'];
$head=$_POST['head']; 


$con = new mysqli("localhost","root","","exam");
$sql = "UPDATE `department` SET `name`='$depname',`hed_id`='$head' WHERE `id`='$id'";
$run = $con->query($sql);

if($run==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Department Updated Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=dep.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>