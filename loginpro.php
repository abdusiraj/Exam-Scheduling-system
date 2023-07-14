<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COMS</title>
</head>

<body>
<?php  
include ('connection.php');
session_start();
$UserName=$_POST['username'];
$Password=$_POST['password'];
//$pass=md5($Password);



$con = new mysqli("localhost","root","","exam");
$sql = "select * from user where username='".$UserName."' and pass='".$Password."'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$num_row = $result->num_rows;
$usertype = $row['u_type'];
$acivation = $row['status'];

if ($num_row==0)
{
echo '<script type="text/javascript" >alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
exit();
}
else if($usertype=="admin" && $acivation =="1")
{
    $sq= "select * from admin where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['admin_id']=$row['admin_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'admin/index.php\';</script>';
} 
else if($usertype=="head" && $acivation =="1")
{
    $sq= "select * from head where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['hed_id']=$row['hed_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'head/index.php\';</script>';
} 
else if($usertype=="instructor" && $acivation =="1")
{
    $sq= "select * from instructor where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['ins_id']=$row['ins_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'instructor/index.php\';</script>';
} 
else{
    echo "Deactivated Account";
    
}
?>

</body>
</html>
