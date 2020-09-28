<?php
    include("head.php");
    include("navbar.php");
?>

<section style="background-color: currentcolor; min-height: 100vh;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" style="border: 1px solid #ccc; margin: 50px; padding: 40px; border-radius: 5px;">
            <h2 style="text-align: center; color: darkturquoise; font-weight: 400;">Sign Up Here!</h2>

            <?php if( isset( $_GET['error'] ) ) { 
				if( $_GET['error'] == 'password_mismatch' ) echo '<p style="color: red">Password mismatch</p>';
            } ?>
            
            <form method="POST" action="register.php">
            <div class="form-group">
                    <label for="exampleInputFullName" style="color: darkturquoise;">Full Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputFullName" aria-describedby="emailHelp" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: darkturquoise;">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="color: darkturquoise;">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2" style="color: darkturquoise;">Confirm Password</label>
                    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder=" Confirm Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputNumber" style="color: darkturquoise;">Mobile No</label>
                    <input type="text" class="form-control" name="mobile" id="exampleInputNumber" placeholder=" Enter Mobile No">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; background-color: darkturquoise;">Sign Up</button>
                <a href="login.php"><p style="padding: 10px; text-align: center; color: darkturquoise;"> Have an account? Login here!</p></a>
            </form>
        </div>
    </div>
</div>
</section>