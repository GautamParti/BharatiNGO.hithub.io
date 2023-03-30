<?php
include 'partials/db_connect.php';
 
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql="INSERT INTO `ngo`.`ngot` (`name` , `phone` , `email` , `address`, `dt`) VALUES ('$name', '$phone', '$email', '$address', current_timestamp());";
// echo $sql;
if($conn->query($sql)==true){
    // echo "successfully inserted";
    $insert=true;
}else{
    echo "ERROR : $sql <br> $conn->error";  
}
header("location: login.php");
?>
