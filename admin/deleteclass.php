<?php 
  include("../connection.php");
  $id = $_GET['Id'];
 
$sql = "DELETE FROM `class room` WHERE `id`='$id'";
$run = $con->query($sql);

if($run==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Data Successfully DLETED!!!")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=class room.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

 ?>