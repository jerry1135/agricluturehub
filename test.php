
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script	type="text/javascript">
$( document ).ready(function() {
		<?php 
										require_once("../../../config/connection.php");								
                                   $sql1 = "UPDATE `order` SET `payment`='paypal1' WHERE order_id='2' ";
                                   $result1=mysqli_query($conn,$sql1);	
?>
});
</script>