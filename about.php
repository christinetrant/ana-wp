<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<!-- ================= -->
<!-- ===   ABOUT   === -->
<!-- ================= -->
<section class="site-section">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
        <h2 class="mb-3 text-primary">About Ana</h2>
        
        <!--<p class="lead">Mission Statement</p>-->
        <?php

      /* Start the Loop */
      while ( have_posts() ) : the_post();

        get_template_part( 'content', 'page' );

      endwhile; // End of the loop.
    ?>
        <p><a href="http://www.femaleboxingcoach.com/classes/" class="btn btn-primary pill px-4">Classes</a></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>