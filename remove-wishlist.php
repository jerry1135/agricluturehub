<?php

require_once("../../../config/connection.php");

     if(isset($_GET['id']))

     {
     	$id = $_GET['id'];
     	$sql = "delete from wishlist where wishlist_id=$id";
     	$result = mysqli_query($conn,$sql);

     	if($result)
     	{
     		header("Location:wishlist.php?msg=success");

     	}
     	else
     	{
     		header("Location:wishlist.php?msg=error");
     	}
     }
      else
     {
     
     	header("Location:wishlist.php?msg=error1");
     }
?>