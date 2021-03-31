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

if (isset($_REQUEST['create_database'])){
  $db = $_REQUEST['database_name'];
  $data_user = $_REQUEST['database_user'];
  $data_pass = $_REQUEST['database_password'];
  mysqli_query($conn,"INSERT INTO `database_bbcsolution`(`database_name`, `database_admin_name`, `database_admin_password`) VALUES ('$db','$data_user','$data_pass')");
  header("Location:../index.php");
}
?>