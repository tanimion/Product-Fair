<?php
	include ('dbconnect.php');

	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	
	$sql = "INSERT INTO products ( `name`, `price`, `description` ) VALUES ( '$name', '$price', '$description')";
	if (mysqli_query( $conn, $sql ) ) {
		$prod = mysqli_query( $conn, "SELECT id FROM products ORDER BY id DESC LIMIT 1")  or die( mysqli_error( $conn ) );
		$arr = mysqli_fetch_array( $prod );
		$id = $arr['id'];

		$target_dir = "images/product_images/";
		$target_file = $target_dir . $id . '.jpg';
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		if($check !== false) {
    		echo "File is an image - " . $target_file . ".";
   	 		$uploadOk = 1;
		} else {
    		echo "File is not an image.";
    		$uploadOk = 0;
		}
		if( $uploadOk ) {
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		}
		header('location:product_list.php');
		die();
	}
	else{
		echo mysqli_error( $conn );
		header('location:add_product.php?error=database_error');
	}
?>