
   <?php get_header();?>
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
    <!-- search option -->
    <section class="container search">
        <div class="row">
          <div class="col-sm-9">
    <!-- Marquee -->
    <section class="container">
      <marquee behavior="" direction="">
        <?php dynamic_sidebar('marquee');?>
      </marquee>
    </section>
          </div>
          <div class="col-sm-3">
            <form action="">
              <input type="text" value="<?=get_search_query();?>" name="s">
              <button>search</button>
            </form>
          </div>
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
          <div class="col-sm-4">
            <div class="card" style="width=18rem" >
            <?php dynamic_sidebar('cardimg2');?>
              <div class="card-body">
              <?php dynamic_sidebar('cardbody2');?>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width=18rem" >
            <?php dynamic_sidebar('cardimg3');?>
              <div class="card-body">
              <?php dynamic_sidebar('cardbody3');?>
          </div>
          </div>

        </div>
      </section> 
      <?php get_footer();?>   
 
    <!-- hero part end -->
    <!-- photo part start -->
  
    

<?php wp_footer();?>
</body>
</html>