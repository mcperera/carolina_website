    <?php 
        $title = 'About Us';
        include 'templates/header.php';
        include 'templates/navigation.php';
    ?>
    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/about_us.jpg" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block">About Us</h2>
            </div> 
        </div>
    </div>

    <div class="container py-4">
        <div class="row">
                <main class="col-lg-8 main-content">
                    <h2 class="d-block d-md-none text-uppercase text-center">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis ac risus sit amet condimentum. Duis pellentesque vitae erat a varius. Donec tincidunt, risus sit amet varius tincidunt, turpis arcu ullamcorper ligula, at feugiat turpis massa vitae erat. Nam sit amet posuere urna. Mauris consequat elit in tellus fringilla, in mollis dolor feugiat. Vivamus fringilla eros sed leo maximus rhoncus. Phasellus sit amet vehicula diam. Pellentesque ut lorem ex. Donec sed accumsan velit.</p>
                    
                    <p>Vestibulum egestas neque eget est pharetra gravida. Vestibulum aliquet, mauris nec blandit pharetra, tellus lorem feugiat dui, non sollicitudin quam neque et lorem. Fusce quis magna sollicitudin, consectetur ante ut, imperdiet turpis. Fusce hendrerit justo ut bibendum semper. Quisque fringilla posuere neque a vulputate.</p>
                
                    <div class="facilities-gallery">
                    
                        <h3 class="text-center text-uppercase p-4"><span class="text-lowercase">Checkout our</span>facilities</h3>
                        
                        <a href="#" data-target="#image_1" data-toggle="modal">
                            <img src="img/gallery_thumb_01.jpg" class="rounded">
                        </a>
                        <a href="#" data-target="#image_2" data-toggle="modal">
                            <img src="img/gallery_thumb_02.jpg" class="rounded">
                        </a>
                        <a href="#" data-target="#image_3" data-toggle="modal">
                            <img src="img/gallery_thumb_03.jpg" class="rounded">
                        </a>
                        
                        <div class="modal fade" id="image_1" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/gallery_large_01.jpg" class="img-fluid">
                                    </div>
                                </div> <!--.modal-content-->
                            </div> <!--.modal-dialog-->
                        </div><!--.modal-->
                        
                        <div class="modal fade" id="image_2" tabindex="-1" role="dialog" aria-labelledby="image_2" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/gallery_large_02.jpg" class="img-fluid">
                                    </div>
                                </div> <!--.modal-content-->
                            </div> <!--.modal-dialog-->
                        </div><!--.modal-->
                        
                        <div class="modal fade" id="image_3" tabindex="-1" role="dialog" aria-labelledby="image_3" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/gallery_large_03.jpg" class="img-fluid">
                                    </div>
                                </div> <!--.modal-content-->
                            </div> <!--.modal-dialog-->
                        </div><!--.modal-->
                    </div> <!--.facilities-gallery-->
                </main>
                
                
                
                <aside class="col-lg-4 pt-4 pt-lg-0">
                    <div class="sidebar hours p-3">
                        <?php include 'templates/business_hours.php'; ?>
                    </div>
                </aside>
        </div>
    </div>

    <?php 
        include 'templates/footer.php';
    ?>
