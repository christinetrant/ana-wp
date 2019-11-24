<?php /* Template Name: Classes [Blog] */ ?>

  <?php get_header(); ?>

  <!-- =================== -->
  <!-- ===   CLASSES   === -->
  <!-- =================== -->
  <section class="site-section">
    <div class="container">
      <h1 class="mb-3 text-uppercase"><strong class="text-primary font-weight-bold">Classes</strong></h1>
      
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-12 mb-5 mb-lg-0"> 
          <p class="mb-4">Services:</p>
          <ul class="site-block-check">
            <li>1:1 sessions</li>
            <li>Small group sessions</li>
            <li>Large group sessions</li>
            <li>Corporate team bonding sessions</li>
            <li>Personal training</li>
            <li>Couples sessions</li>
          </ul>

          <p class="mb-4">For more information or any queries please contact me and I'll be happy to help!</p>
          <p><a href="http://www.femaleboxingcoach.com/#contact" class="btn btn-primary pill px-4">Contact Me</a></p>
        </div>
      </div>

      <div class="row">
        
        <?php 
          if ( have_posts() ) { 
            while ( have_posts() ) : the_post();
        ?>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="block-media-1 heading-with-border bg-white border">
              <div class="p-4">
                <h3 class="h5"><?php the_title(); ?></h3>  
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        <?php
          endwhile;
        } 
        ?>
      
      </div> 
    </div>
  </section>

  <?php get_footer(); ?>