<?php
include "db.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

if($password==$repassword){
       //echo
}else{
     echo "<script>alert('Password not Matched.'); window.location.href='register.php';</script>";
}
$sql="insert into register(name,email,password,repassword) values ('$name','$email','$password','$repassword')";
$result=mysqli_query($con,$sql);
if($result){
    echo"<script>alert('Register Successfully.'); window.location.href='index.php';</script>";
}else{
    echo "<script>alert('Email already exists'); window.location.href='register.php';</script>";
}                 
?>
