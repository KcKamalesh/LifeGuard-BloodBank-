<?php
include "db.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from register where email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
echo $count;
if($count>0){
 echo"<script>alert('Login Successfully.'); window.location.href='home.php';</script>";
}else{
    echo"<script>alert('Woops! Email or Password is Wrong.'); window.location.href='index.php';</script>";
}
?>