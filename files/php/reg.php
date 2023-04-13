<?php
error_reporting(E_ALL);
$connect=mysqli_connect('localhost','root','','bdd_site');
if(!$connect){
    echo 'Error : ' . mysqli_connect_error();
}else{
    echo 'LIVE CONNECT : OK';
}
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birth = $_POST['birth'];
if(isset($_POST['submit'])){
    $sql = "INSERT INTO users(username,lastname,dob,gender,email,phone,password) VALUES ('$username','$fullname','$birth','$gender','$email','$phone')";
    mysqli_query($connect,$sql);
}


?>