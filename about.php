
   <?php 
  /**
   * Tamplate Name: about
   */
   
   get_header();?>
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
      

<?php wp_footer();?>
</body>
</html>