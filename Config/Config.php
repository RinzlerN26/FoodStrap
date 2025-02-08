<?php
$con = mysqli_connect('localhost', 'root', 'root', 'Food_Db');

if (mysqli_connect_errno()){
    die("Connection Fail: ". mysqli_connect_error());
}
?>