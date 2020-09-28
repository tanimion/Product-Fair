<?php
  session_start();
  include("head.php");
?>

<!doctype html>
<html>
  <body>
    <!--header start-->
    <?php
        include("navbar.php");
      ?>
    <section class="banner" style="background: darkslateblue;">
        <div class="row align-items-center justify-content-center banner-content">
          <div class="col-md-8 col-sm-10 text-center py-0">
            <h1>Welcome to our Zone</h1>
            <h5>Collect your premium products</h5>
            <a href="product_list.php" class="btn btn-outline-info">Pick from Here</a>
          </div>
        </div>
      </div>
    </section>
    <!--header end-->

    <!-- about us part start -->

    <section class="about-us">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-12 text-center">
            <h1>about us</h1>
            <h5>Our major marketing through this</h5>
            <span></span>
          </div>
        </div>

        <div class="row justify-content-center align-items-center">
          <div class="col-md-4 text-center pt-5">
            <img src="images/like.png" alt="like">
            <h3>Facebook Marketing</h3>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sint placeat id optio, dolorum iste.</h5>
          </div>

          <div class="col-md-4 text-center pt-5">
            <img src="images/landing-page.png" alt="landing-page">
            <h3>Leaflet</h3>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sint placeat id optio, dolorum iste.</h5>
          </div>

          <div class="col-md-4 text-center pt-5">
            <img src="images/messenger.png" alt="messenger">
            <h3>Chatbot</h3>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sint placeat id optio, dolorum iste.</h5>
          </div>
        </div>
      </div>
    </section>
  <!-- about us part end -->


  <!-- our garden part start -->

  <section class="garden">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <h1>Our Products</h1>
          <h5>Some of our sample criterias are given below</h5>
          <span></span>
        </div>
      </div>

      <div class="garden-content" >
        <div class="row justify-content-center no-gutters align-items-center">
          <div class="col-md-4 pt-3 px-5">
            <img src="images/consumer.png" alt="mango" class="img-fluid">
          </div>
          <div class="col-md-8 pt-3">
            <h1>Consumer Goods</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, eaque. Debitis nobis, a suscipit ratione dolore voluptas, tempora quibusdam nihil delectus obcaecati corrupti, error ex aperiam maxime in eius quaerat!</p>
          </div>
        </div>

        <div class="row justify-content-center no-gutters align-items-center">
          <div class="col-md-8 pt-3">
            <h1>Hardware Accessories</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, eaque. Debitis nobis, a suscipit ratione dolore voluptas, tempora quibusdam nihil delectus obcaecati corrupti, error ex aperiam maxime in eius quaerat!</p>
          </div>
          <div class="col-md-4 pt-3 px-5">
            <img src="images/hardware.jpg" alt="mango" class="img-fluid">
          </div>
        </div>

        <div class="row justify-content-center no-gutters align-items-center">
          <div class="col-md-4 pt-5 px-5">
            <img src="images/electronics.png" alt="mango" class="img-fluid">
          </div>
          <div class="col-md-8 pt-3">
            <h1>Electronics Goods</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, eaque. Debitis nobis, a suscipit ratione dolore voluptas, tempora quibusdam nihil delectus obcaecati corrupti, error ex aperiam maxime in eius quaerat!</p>
          </div>
        </div>

        <div class="row justify-content-center no-gutters align-items-center">
          <div class="col-md-8 pt-3">
            <h1>Construction Materials</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, eaque. Debitis nobis, a suscipit ratione dolore voluptas, tempora quibusdam nihil delectus obcaecati corrupti, error ex aperiam maxime in eius quaerat!</p>
          </div>
          <div class="col-md-4 pt-3 px-5">
            <img src="images/construction.jpg" alt="mango" class="img-fluid">
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- our garden part end -->


  <!-- contact us part start -->

  <section class="getintouch">
    <div class="container">
      <div class="row justify-content-center align-items-center text-center">
        <div class="col-md-8">
          <div class="get-content">
            <h1>Contact Us</h1>
            <ul>
              <li>
                <a href=""><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
            <p><a href=""><i class="fas fa-mobile-alt"></i> +8801600000009</a></p>
            <form action="">
              <div class="form-group">
                <input type="email" class="form-control form-custom" placeholder="Email Address">
              </div>
            </form>
            <button class="btn btn-outline-dark btn-dark-custom">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- footer part start -->
<?php
  include("footer.php");
?>
  <!-- footer part end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>