<?php
    include("head.php");
    include("navbar.php");
?>

<section style="background-color: currentcolor; min-height: 100vh;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" style="border: 1px solid #ccc; margin: 50px; padding: 40px; border-radius: 5px;">
            <h2 style="text-align: center; color: darkturquoise; font-weight: 400;">Add Product</h2>

            <?php if( isset( $_GET['error'] ) ) { 
				if( $_GET['error'] == 'password_mismatch' ) echo '<p style="color: red">Password mismatch</p>';
            } ?>
            
            <form method="POST" action="insert_product.php">
            <div class="form-group">
                    <label for="exampleInputFullName" style="color: darkturquoise;">Product Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputFullName" aria-describedby="emailHelp" placeholder="Enter Product Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: darkturquoise;">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" style="color: darkturquoise;">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-3" style="width: 100%; background-color: darkturquoise;">Submit</button>
            </form>
        </div>
    </div>
</div>
</section>