<?php
session_start();//session started
$db_host="localhost";
$db_user='root';
$db_password='';
$db_name='bbc';
$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if (!$conn) {
    echo "Not Connect";
}
?>
