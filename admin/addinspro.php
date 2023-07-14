<?php  
include ('../connection.php');
session_start();
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$addres=$_POST['address'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$type="instructor";
$active='1';


$emailexist =$con->query ("SELECT * from `user` where `email`='$email'");

if($emailexist->num_rows == 0){

$con = new mysqli("localhost","root","","exam");
$sql = "INSERT INTO `instructor`(`fname`, `mname`, `lname`, `address`, `email`, `age`, `sex`, `uname`, `pass`) VALUES ('".$fname."','".$mname."','".$lname."','".$addres."','".$email."','".$age."','".$sex."','".$uname."','".$pass."')";
$run = $con->query($sql);

$sql1 = "INSERT INTO `user`(`username`, `pass`, `email`, `u_type`, `status`) VALUES ('".$uname."','".$pass."','".$email."','".$type."', 1)";
$run1 = $con->query($sql1);






if($run && $run1 ==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Created Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=instructor.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
}
else{

  echo '<script language="javascript">';
     echo 'alert("email allready exist please use an other email")';
      echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=instructor.php" />';
}
?>