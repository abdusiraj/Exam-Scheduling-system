<?php  
include ('../connection.php');
session_start();
$id=$_POST['id'];
$blocknum=$_POST['blocknum'];
$roomnum=$_POST['roomnum'];
$capacity=$_POST['capacity']; 


$con = new mysqli("localhost","root","","exam");
$sql = "UPDATE `class room` SET `block_no`='$blocknum',`room_no`='$roomnum',`capacity`='$capacity' WHERE `id`='$id'";
$run = $con->query($sql);

if($run==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Class Room Updated Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=class room.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>