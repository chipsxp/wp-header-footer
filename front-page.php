<?php get_header(); ?>
    <!--Start Main Content-->
  <main class="d-flex bd-highlight">  
    <div class="container">
      <div class="row align-items-start">

      <!--Articles-->
          <?php
        $args = array(
          'post_type' => 'page',
          'posts_per_page' => 3,
          'orderby' => 'menu_order',
          'order' => 'ASC'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post();
            ?>
            
            <div class="col-md-3 card">
              <?php the_title('<h3 class="card-title">','</h3>'); ?>
              <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
              <?php the_excerpt('<p class="card-text">','</p>'); ?>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="<?php the_permalink(); ?>" class="btn btn-primary me-md-2">Read More</a>
              </div>
            </div>
          
            <?php
          endwhile;
        endif;
        wp_reset_postdata();
      ?>        
      
    <!--Horizontal Line-->
    <p><hr></p>
      <!--Jumbotron-->
        <div class="p-5 mb-4 bg-light rounded-3">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
          </div>
        </div>
      <section>
        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
              <h2>Change the background</h2>
              <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
              <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>Add borders</h2>
              <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
              <button class="btn btn-outline-secondary" type="button">Example button</button>
            </div>
          </div>
        </div>
      </section>
    <!--End of Jumbotron and Articles-->
      </div>
    </div>
    <!--End of Main Content-->
  </main>
<?php get_footer(); ?>  