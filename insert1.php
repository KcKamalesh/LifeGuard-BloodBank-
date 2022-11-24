<?php
include "db.php";
$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$blood=$_POST['blood_group'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];


$sql="insert into donor(name,gender,phone,blood_group,dob,address,pincode,country,state,district) values ('$name','$gender','$phone','$blood','$dob','$address','$pincode','$country','$state','$district')";
$result=mysqli_query($con,$sql);
if($result){
    echo"<script>alert('Donor Register Successfully.'); window.location.href='home.php';</script>";
}else{
    echo "error";
}                 
?>
