<?php
$connect=mysqli_connect('localhost','root','','bdd_site');
if(!$connect){
    echo 'Error : ' . mysqli_connect_error();
}
$username = $_POST['username'];
$password = $_POST['password'];

?>