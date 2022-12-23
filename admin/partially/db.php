<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'acProject');

if (!$con) {
    echo 'connection has been failed';
}


?>