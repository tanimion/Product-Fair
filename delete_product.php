<?php
	include ('dbconnect.php');
	$id = $_GET['id'];
	mysqli_query( $conn, "DELETE FROM products WHERE id='$id'");
	header('location:product_list.php?message=successfully_deleted');
	die();
?>