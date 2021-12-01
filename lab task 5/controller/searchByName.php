<?php
	require_once('../model/productModel.php');

	if(isset($_POST['search'])){
	$name = $_POST['key'];
	
	$status=getproductByname($name);
	if($status)
	{
		header("Location:../view/display.php " );
	}
	else{
		echo "error";
	}

}
?>