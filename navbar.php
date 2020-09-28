<?php
    include("head.php");
?>

<!doctype html>
<html>
    <body>
        <!--navbar start-->
        <section style="background-color:currentColor;">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand custom-logo" href="index.php"><img src="images/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link">
                            <?php 
                                if ( isset ( $_SESSION['id'] ) ) {
                                    echo '<p style="color:darkturquoise;" class="mx-5"> Hi, <b>' . $_SESSION['name'] . '</b></p>';
                                }
                            ?>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product_list.php">Products</a>
                    </li>
                    <?php
                        if(isset($_SESSION['id'])) {
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>';
                            echo '<li class="nav-item">
                                <a class="btn btn-outline-info" href="add_product.php">Add Item</a>
                            </li>'; 
                            
                        }
                        else {
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>';
                            echo ' <li class="nav-item">
                                     <a class="nav-link" href="registration.php">Sign Up</a>
                                 </li>';
                        }
                    ?>
                    </ul>
                </div>
                </nav>
            </div>
    </section>
    </body>
</html>