<?php get_header(); ?>

    <!-- ======================= -->
    <!-- ===   COVER IMAGE   === -->
    <!-- ======================= -->
    <section class="site-blocks-cover" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-end justify-content-center">
          <div class="col-md-10 text-right end-pad" data-aos="fade">
            <p><?php echo get_theme_mod('showcase_text', 'For Women, By Women'); ?></p>
            <h1><strong><?php echo get_theme_mod('showcase_heading', 'Women&#39;s <br> Recreational <br>Boxing'); ?></strong></h1>
            <!-- <p>For Women, By Women </p> -->
            <!-- <h1><strong>Women&#39;s <br> Recreational <br>Boxing</strong></h1> -->
          </div>
        </div>
      </div>
    </section> 
  
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
            <h1 class="mb-3 text-uppercase"><strong class="text-primary font-weight-bold">About Ana</strong></h1>
            <p class="mb-4"><?php echo get_theme_mod('about_text', 'I am a passionate and dedicated level 2 England boxing coach, level 3 personal trainer &amp; qualified in level 2 British Sign Language (BSL).  LGBT women &amp; deaf clients are welcome. I am a coach who smashes barriers and believes that inclusion is key.'); ?></p>

            <p><a href="<?php echo get_theme_mod('about_btn', 'http://google.com'); ?>" class="btn btn-primary pill px-4"><?php echo get_theme_mod('about_btn_text', 'Find Out More'); ?></a></p> 
          </div>
          <div class="col-md-12 col-lg-6 ml-auto">
            <img src="<?php echo get_theme_mod('about_image', get_bloginfo('template_url') .'/images/gallery/boxing-12.jpg'); ?>" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
    <!-- =================== -->
    <!-- ===   CLASSES   === -->
    <!-- =================== -->
    <div class="site-section block-13">
      <div class="container">
        <h1 class="mb-3 text-uppercase"><strong class="text-primary font-weight-bold">Featured Classes</strong></h1>

        <div class="row align-items-center">
          <div class="heading-with-border bg-white col-md-12 col-lg-4">
            <p class="lead"><?php echo get_theme_mod('featured_left_heading', 'Boxing Babes'); ?></p>
            <p class="mb-4"><?php echo get_theme_mod('featured_left_text', 'A full body workout. Learn defences, combinations, footwork and pad work. Sessions are focused on fitness and partner work, helping you build confidence, make friends, and strengthen your body and mind.<br>All abilities and fitness levels welcome!'); ?></p>
          </div>

          <div class="heading-with-border bg-white col-md-12 col-lg-4">
            <img src="<?php echo get_theme_mod('featured_class_image', get_bloginfo('template_url') .'/images/gallery/boxing-18.jpg'); ?>" alt="Image" class="img-fluid">
          </div>
          
          <div class="heading-with-border bg-white col-md-12 col-lg-4">
            <p class="lead"><?php echo get_theme_mod('featured_right_heading', 'Boom Box'); ?></p>
            <p class="mb-4"><?php echo get_theme_mod('featured_right_text', 'Recreational boxing for women of all sizes, abilities and fitness levels. A full body workout which includes defences, combinations, footwork and partner work with pads whilst getting fit. At these sessions you get to learn the ropes of boxing and have fun whilst you exercise.<br>Please bring your own gloves if you have, limited pairs available.'); ?></p>
            <p><a href="<?php echo get_theme_mod('featured_btn', 'http://www.femaleboxingcoach.com/classes'); ?>" class="btn btn-primary pill px-4"><?php echo get_theme_mod('featured_btn_text', 'More Classes'); ?></a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== -->
    <!-- ===   SCHEDULE   === -->
    <!-- ==================== -->
    <div class="block-schedule overlay site-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/gallery/boxing-19.jpg');">
      <div class="container">

        <h1 id="schedule" class="mb-3 text-uppercase"><strong class="text-white font-weight-bold">Schedule</strong></h1>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-sunday" role="tabpanel"></div>
        </div>
          <!-- Row 1 -->
          <div class="row-wrap">
            <?php if(is_active_sidebar('pill')) : ?>
              <?php dynamic_sidebar('pill'); ?>
            <?php endif; ?> 
          </div>
          
          <!-- Button -->
          <div class="row-wrap">
            <div class="row bg-white p-4 align-items-center">
              <div class="col-sm-4 col-md-4 col-lg-4"><h3 class="h5"></h3></div>
              <div class="col-sm-3 col-md-3 col-lg-3 text-md-right"><a href="http://www.femaleboxingcoach.com//classes" class="btn btn-primary pill px-4 mt-3 mt-md-0">More info</a></div>
              <div class="col-sm-4 col-md-4 col-lg-4"></div>
            </div>
          </div>

        </div> <!-- End Container -->
      </div>

    <!-- ======================== -->
    <!-- ===   TESTIMONIALS   === -->
    <!-- ======================== -->
    <div id="testimonials" class="site-section block-14">
      <div class="container">
        <h1 class="mb-3 text-uppercase"><strong class="text-primary font-weight-bold">Testimonials</strong></h1>
        <!-- Plugin link: https://wordpress.org/plugins/strong-testimonials/ -->
        <?php echo do_shortcode( '[testimonial_view id="1"]' ) ?>
      </div>
      
    </div>

<!-- =================== -->
<!-- ===   GALLERY   === -->
<!-- =================== -->
<section class="ftco-gallery site-section py-5 block-13">
  <div class="container">
    <h1 class="mb-3 text-uppercase"><strong class="text-white font-weight-bold">Gallery</strong></h1>
    <!-- Plugin link: https://wordpress.org/plugins/wp-bootstrap-gallery/ -->
    <div class="row no-gutters">
      <!-- <?php //echo do_shortcode( '[foogallery id="126"]' ) ?> -->
      <?php echo do_shortcode( '[foogallery id="50"]' ) ?>
    </div>
  </div>
</section>

<!-- ======================== -->
<!-- ===     CONTACT      === -->
<!-- ======================== -->  
<section class="ftco-appointment site-section block-14">
  <div class="container">
    <div class="row no-gutters d-md-flex align-items-center">  
      <!-- GOOGLE MAP -->
      <div class="col-md-6 d-flex align-self-stretch">
        <!-- <div id="map"></div> -->
        <iframe id="map" src="<?php echo get_theme_mod('map_link', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.4702975670543!2d-0.09762168469176209!3d51.50458731873055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604a40aacba9d%3A0xdcf1b63decd0f0c6!2sThe%20Bridge!5e0!3m2!1sen!2suk!4v1571583457303!5m2!1sen!2suk'); ?>" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>    
      </div>
        
      <div class="col-md-6 appointment ftco-animate">
        <h3 class="mb-3" id="contact">Contact</h3>
        <form action="#" class="appointment-form">
          <!-- <?php //echo do_shortcode('[contact-form-7 id="84" title="Contact form 1"]'); ?> -->
          <?php echo do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
        </form>
      </div>          
    </div>
  </div>
</section>

<?php get_footer(); ?>