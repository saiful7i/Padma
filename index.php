<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podma</title>
    <?php wp_head();?>
</head>
<body>
    <!-- heade part -->
    <header class="slider container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
    $x = 0;
    while(have_posts()){the_post();
    $x++; ?>
    <div class="carousel-item <?= ($x==1)?'active':''?>">
        <?php the_post_thumbnail();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
        <?php } ?>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>
    <!-- heade part end -->
    <!-- logo part  -->
    <section class="container-fluid logo pt-2 m-2">
        <div class="row">
            <div class="col-sm-6 logo_left"><?php the_custom_logo();?></div>
            <div class="col-sm-6 logo_right text-end">
                <?php dynamic_sidebar('ltr');?>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- menu part start -->
        <!-- menu part -->
     <section class="container menu_1">
        <div class="row">
        <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
  
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php 
        wp_nav_menu(array(
            'theme_location'=>'TM',
            'menu_class'=>'navbar-nav menu_item' 
        ) )
        ?> 
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      </ul>
      
    </div>
  </div>
</nav>
        </div>
    </section>
    <!-- hero part end -->
      <section class="container hero text-center">
        <div class="row hero_top">
          <?php 
          dynamic_sidebar('herotitle');
          ?>
        </div>
        <div class="row hero_bottom">
          <div class="col-sm-4">
            <div class="card" style="width=18rem" >
            <?php dynamic_sidebar('cardimg1');?>
              <div class="card-body">
              <?php dynamic_sidebar('cardbody1');?>

              <!-- <h5 class="card-title">card-title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, in? Debitis fuga, quaerat obcaecati eum </p>
              <a href="#"></a> -->
            </div>
          </div>

          </div>
          <div class="col-sm-4">2</div>
          <div class="col-sm-4">3</div>
          </div>

        </div>
      </section>    
 
    <!-- hero part end -->
    <!-- photo part start -->
  
    

<?php wp_footer();?>
</body>
</html>