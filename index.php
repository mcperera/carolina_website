<?php 
    $title = 'Home';
    include 'templates/header.php';
    include 'templates/navigation.php';
?>
    
    
    <div class="container">
          <div id="main-slider" class="carousel slide mt-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>
                </ol> <!--.carousel-indicators-->
              
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                          <img src="img/slide_01.jpg" class="d-block img-fluid" alt="our facilities">
                          <div class="carousel-caption d-none d-md-block">
                              <h3 class="text-uppercase">Brand new facilities</h3>
                          </div>
                    </div><!--.carousel-item-->
                    <div class="carousel-item">
                          <img src="img/slide_02.jpg" class="d-block img-fluid" alt="our facilities">
                          <div class="carousel-caption d-none d-md-block">
                              <h3 class="text-uppercase">Learn about our services</h3>
                          </div>
                    </div>
                    <div class="carousel-item">
                          <img src="img/slide_03.jpg" class="d-block img-fluid" alt="our facilities">
                          <div class="carousel-caption d-none d-md-block">
                              <h3 class="text-uppercase">New website 2 for 1 in all services</h3>
                          </div>
                    </div>
                </div> <!--.carouse-inner-->
                
                <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#main-slider" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
          </div>
    </div>
    
    
    <section class="new-website py-5">
        <h2 class="text-center text-uppercase"><span class="text-lowercase">Welcome to our new</span> website</h2>
        <p class="text-center mt-4">Feel like new with our massages and professional <br> therapists</p>
    </section>
    
    
    <div class="container pb-5">
      <div class="row">
          <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
              <div class="image-links">
                  <img class="img-fluid" src="img/service_01.jpg">
                  <div class="row no-gutters">
                      <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                          <h3 class="text-center text-uppercase"><span class="text-lowercase">learn more </span> about us</h3>
                          <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
                      </div>
                  </div>
              </div>
          </div> <!--.col-md-4-->
          <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
              <div class="image-links">
                  <img class="img-fluid" src="img/service_02.jpg">
                  <div class="row no-gutters">
                      <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                          <h3 class="text-center text-uppercase"><span class="text-lowercase">about our</span> services</h3>
                          <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
                      </div>
                  </div>
              </div>
          </div> <!--.col-md-4-->
          <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
              <div class="image-links">
                  <img class="img-fluid" src="img/service_03.jpg">
                  <div class="row no-gutters">
                      <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                          <h3 class="text-center text-uppercase"><span class="text-lowercase">visit our </span> store</h3>
                          <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
                      </div>
                  </div>
              </div>
          </div> <!--.col-md-4-->
      </div>
    </div>
    
    <div class="business-hours">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <?php include 'templates/business_hours.php'; ?>
                </div>
                <div class="col-md-6 bg-hours">
                
                </div>
            </div>
        </div>
    </div>
    
    <div class="container products py-5">
        <h2 class="text-center text-uppercase"><span class="text-lowercase">checkout our</span> products</h2>
        
        <div class="row py-4">
          
            <?php
              try {
                require_once 'inc/db.php';
                $sql = 'SELECT `id`, `name`, `image_thumb`, `price`, `short_description` FROM `products` LIMIT 4 ';
                $result = $db->query($sql);
              } catch (Exception $e) {
                $error = $e->getMessage();
              }
              $rows =  $result->num_rows;
              if(!$rows) {
                echo "No Results Found";
              } else {
                while($products = $result->fetch_assoc()) { ?>
                    <div class="col-6 col-md-3 mb-5 mb-md-0">
                          <div class="card">
                              <a href="product.php?product=<?php echo $products['id']; ?>">
                                  <img src="img/<?php echo $products['image_thumb']; ?>" class="card-img-top img-fluid">
                                  <div class="card-block">
                                      <h3 class="card-title text-center text-uppercase mb-0"><?php echo $products['name']; ?></h3>
                                      <p class="card-text text-uppercase"><?php echo $products['short_description']; ?></p>
                                      <p class="price text-center mb-0">$ <?php echo $products['price']; ?></p>
                                  </div>
                              </a>
                          </div> <!--.card-->
                    </div><!--col-6 col-md-3-->
              
              <?php
                }
             }
              $db->close();
            ?>
        </div> <!--.row-->
    </div> <!--.container-->
    

    
    <?php 
        include 'templates/appointment.php';
        include 'templates/footer.php';
    ?>