<?php
	
	require_once('db.php');

	
	function getproductByname($name){

		$conn = getConnection();

		$sql = "select * from products where name='{$name}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllproduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		
		$products =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($products, $row); 
			global $products;
		}

		return $products;

	}

	function insertProduct($product){

		$conn = getConnection();
		$sql = "insert into products values('{$product['name']}', '{$product['bprice']}', '{$product['sprice']}','{$product['profit']}','{$product['display']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($product){

		$conn = getConnection();
		$sql = "update products set bprice=['{$product['bprice']}'], sprice=['{$product['sprice']}'], profit=['{$product['profit']}'],display=['{$product['display']}] where name = {$product['name']} ";
		$sql2= "UPDATE products SET bprice='{$product['bprice']}',sprice='{$product['sprice']}', profit='{$product['profit']}',display='{$product['display']}' WHERE name ='{$product['name']}' ";
		if(mysqli_query($conn, $sql2)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($name){
		$conn = getConnection();
		$sql = "delete from products where name={$name}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>