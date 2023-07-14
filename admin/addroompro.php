<?php  
include ('../connection.php');
session_start();
$blocknum=$_POST['blocknum'];
$roomnum=$_POST['roomnum'];
$capacity=$_POST['capacity']; 


$con = new mysqli("localhost","root","","exam");
$sql = "INSERT INTO `class room`(`block_no`, `room_no`, `capacity`) VALUES ('".$blocknum."','".$roomnum."','".$capacity."')";
$run = $con->query($sql);



if($run ==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Class Room Created Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=class room.php" />';
                            }

  else{
      echo "something error occure".$con->error;
      echo '<meta http-equiv="refresh" content="0;url=addroom.php" />';
  }
?>