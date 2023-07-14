<?php 
  include("../connection.php");
  $id = $_GET['Id'];
 

//$con = new mysqli("localhost","root","","wbde");
//$sql = "DELETE  `coordinator` WHERE `co_id`='$id'";
$sql = "UPDATE `semister` SET `status`=0";
$run = $con->query($sql);

$sql1 = "UPDATE `semister` SET `status`=1 where id='$id'";
$run1 = $con->query($sql1);

if($run && $run1==true)
{
//header("Location:admin/index.php");
                                   
                                    echo '<meta http-equiv="refresh" content="0;url=semister.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

 ?>