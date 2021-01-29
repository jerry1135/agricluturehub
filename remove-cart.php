<?php

require_once("../../../config/connection.php");

     if(isset($_GET['id']))

     {
     	$id = $_GET['id'];
     	$sql = "delete from cart where cart_id=$id";
     	$result = mysqli_query($conn,$sql);

     	if($result)
     	{
     		header("Location:cart.php?msg=success");

     	}
     	else
     	{
     		header("Location:cart.php?msg=error");
     	}
     }
      else
     {
     
     	header("Location:cart.php?msg=error1");
     }






/* if(isset($_GET['id']))

     {
     	$id = $_GET['id'];
     	$sql = "delete from cart where cart_id= $id";
     	

     	$result = mysqli_query($conn,$sql);


     	if($result)
     	{
     		
     		
     		header("Location:cart.php?msg=success");

     	}
     	else
     	{
     		header("Location:cart.php?msg=fail");
     	}
     }

  */   
?>