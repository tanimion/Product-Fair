<?php
	include ('dbconnect.php');

	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	
	$sql = "UPDATE products  SET `name` = '$name', `price` = '$price', `description` = '$description' WHERE id='$id'";
	if (mysqli_query( $conn, $sql ) ) {
        
		header('location:product_list.php');
		die();
	}
	else{
		echo mysqli_error( $conn );
		header('location:edit_product.php?error=database_error');
	}
?>