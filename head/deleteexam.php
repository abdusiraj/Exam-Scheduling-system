<?php 
  include("../connection.php");
  $id = $_GET['Id'];
 
$sql = "DELETE FROM `m_exam` WHERE `id`='$id'";
$run = $con->query($sql);

if($run==true)
{
//header("Location:admin/index.php");
                                    
                                    echo '<meta http-equiv="refresh" content="0;url=exam.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

 ?>