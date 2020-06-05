<?php
session_start();

$con = mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'orderinfor');
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$note = $_POST['note'];
$order = $_POST['orders'];
$s = "select * from ordertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num==1){
    echo"Your Order Already Taken";
}
else{
    $reg=" INSERT INTO `ordertable` (`name`, `phone`, `address`, `note`, `orderitems`) VALUES ('$name', '$phone', '$address', '$note', '$order') "; 
    mysqli_query($con,$reg);
    echo"Order Successful";
    header('location: http://127.0.0.1:5500/index.html');
    $message = "Order Successful";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
}
?>