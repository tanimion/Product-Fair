<?php
    include("head.php");
    include("navbar.php");
?>

<section style="background-color: currentcolor; min-height: 100vh;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" style="border: 1px solid #ccc; margin: 50px; padding: 40px; border-radius: 5px;">
            <h2 style="text-align: center; color: darkturquoise; font-weight: 400;">Sign in Here!</h2>

            <?php 
                if( isset( $_GET['error'] ) ) {
                    if( $_GET['error'] == 'user_mismatch' ) {
                        echo '<p style="color: red;">User not found!</p>';
                    }
                }
            ?>

            <form method="POST" action="do_login.php">
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: darkturquoise;">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="color: darkturquoise;">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; background-color: darkturquoise;">Login</button>
                <a href="registration.php"><p style="padding: 10px; text-align: center; color: darkturquoise;">Don't have an account? Click here!</p></a>
            </form>
        </div>
    </div>
</div>
</section>