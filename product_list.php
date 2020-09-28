<?php
    session_start();
    include("head.php");
    include("navbar.php");
    include("dbconnect.php");

    $prod = mysqli_query( $conn, "SELECT id, name, price, description FROM products");

    while($row = mysqli_fetch_array( $prod )) {
        echo '<div class="container my-5">';
        echo '<div class="card">';
          echo '<div class="row">';
            //echo '<aside class="col-sm-5 border-right">';
              //echo '<article class="gallery-wrap">';
                //echo '<div class="img-big-wrap">';
                  //echo '<div>';
                  //echo '<a href=""><img src="images/product_images/'. $row['id'] . '.jpg" style="width:450px"></a>';
                //echo '</div>';
              //echo '</div>';
            //echo '</article>';
          //echo '</aside>';
            echo '<aside class="col-sm-6">';
              echo '<article class="card-body p-5">';
                echo '<h3 class="title mp-3"></h3>';
                echo '<p class="price-detail-wrap">';
                  echo '<span class="price h3 text-warning">' . $row['name'];
                  echo '<span class="currency"> BDT &#2547;</span> <span class="num">' . $row['price'] . '</span>';
                echo '</span>';
              echo '</p>';
                echo '<dl class="item-property">';
                  echo '<dt><h3 style=" color: darkturquoise;">Description</h3></dt>';
                  echo '<dd>';
                  echo '<p>' . $row['description'] . '</p>';
                echo '</dd>';
              echo'</dl>';
    
                    if ( isset ( $_SESSION['id'] ) ) {
                      echo '<a href="edit_product.php?id=' . $row['id'] . '" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-edit"></i> Edit </a>'; 
                      echo '<a href="delete_product.php?id=' . $row['id'] . '" class="btn btn-lg btn-outline-danger text-uppercase mx-2"> <i class="fas fa-trash-alt"></i> Delete </a>';
                    }
                    else {
    
                    }
                echo '</article>';
                echo '</aside>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
    }
    
    ?>

