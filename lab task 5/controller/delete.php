<?php
	$name = $_GET['name'];
	require_once("../model/productModel.php");
	$status=deleteProduct($name);
	if($status)
	{
		header("Location:../view/display.php " );
	}
	else{
		echo error;
	}


?>