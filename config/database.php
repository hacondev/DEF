<?php 
$con = mysqli_connect('adres_ip:port', 'user', 'password', 'db-name');
if(!$con){
    die("Connection Error");
}
?>