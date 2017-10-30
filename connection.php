<?php
$connection = mysqli_connect('52.39.128.239', 'root', 'infinitynkr@321');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'markfed');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}?>