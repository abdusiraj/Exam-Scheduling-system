<?php  
include ('connection.php');
session_start();
$content=$_POST['content'];
//$too=$_POST['too']; 


$con = new mysqli("localhost","root","","exam");
$sql = "INSERT INTO `message`(`content`) VALUES ('".$content."')";
$run = $con->query($sql);



if($run ==true)
{
//header("Location:admin/index.php");
                            /*        echo '<script language="javascript">';
                                    echo 'alert("Department Created Succefully")';
                                    echo '</script>';*/
                                    echo '<meta http-equiv="refresh" content="0;url=contact.php" />';
                            }

  else{
      echo "something error occure".$con->error;
      
  }
?>