<div class="navigation mt-4 py-1">
    <nav class="main-nav py-1 navbar navbar-toggleable-sm navbar-light bg-faded ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#main-navigation" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand d-md-none">Carolina Spa</a>
        <?php 
          $filename = basename($_SERVER['PHP_SELF']);
          $page = str_replace(".php", "", $filename);
        ?>
        <div class="container">
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav nav-justified flex-column flex-sm-row">
                        <li class="nav-item <?php echo ($page == 'index') ? 'active' : ''; ?>">
                              <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item <?php echo ($page == 'about') ? 'active' : ''; ?>">
                              <a href="about.php" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item <?php echo ($page == 'services') ? 'active' : ''; ?>">
                              <a href="services.php" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item <?php echo ($page == 'products') ? 'active' : ''; ?>">
                              <a href="products.php" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item <?php echo ($page == 'contact') ? 'active' : ''; ?>">
                              <a href="contact.php" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
</div>