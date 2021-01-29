<?php
session_start();
require_once("../../../config/connection.php");

$id = $_GET['cid'];
$q= $_GET['qty'];
$uid = $_SESSION['user_id'];
$price = $_GET['price'];


$get = "select * from cart c join 
product p where c.product_id = p.product_id and c.cart_id = $id";

$result1 = mysqli_query($conn,$get);
$row = mysqli_fetch_array($result1);

$p = $row['product_price'];

$amt = ($p ) * $q;


$sql = "update cart set qty=$q , 
amount = $amt where cart_id = $id";
$result2 = mysqli_query($conn,$sql);


$sql3 = "select sum(amount) as product_price from cart where user_id ='".$uid."'";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_array($result3);           
$total = $row3['product_price'];
$total1 = $row3['product_price'];           


echo "$amt-$total-$total1";

?>