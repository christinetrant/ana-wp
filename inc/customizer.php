<?php
  function ana_customize_register($wp_customize) {
    //////////////////////////
    //   SHOWCASE SECTION   //
    //////////////////////////
    $wp_customize->add_section('showcase', array(
    	'title' 		=> __('Showcase', 'wpbootstrap'),
    	'description' 	=> sprintf(__('Options for showcase', 'wpbootstrap')),
    	'priority' 		=> 130
    ));
    
    //   SHOWCASE IMAGE   //
    $wp_customize->add_setting('showcase_image', array(
    	'default'	=> get_bloginfo('template_directory') . '/images/bg.jpg',
    	'type'		=> 'theme_mod'
    ));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		'label'		=> __('Showcase Image', 'wpbootstrap'),
    	'section'	=> 'showcase',
    	'settings'	=> 'showcase_image',
    	'priority'	=> 1
	)));

	//   SHOWCASE HEADING   //
    $wp_customize->add_setting('showcase_heading', array(
    	'default'	=> _x('WOMEN\'S <br> RECREATIONAL <br> BOXING', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
	$wp_customize->add_control('showcase_heading', array(
    	'label'		=> __('Heading', 'wpbootstrap'),
    	'section'	=> 'showcase',
    	'priority'	=> 2
    ));

    //   SHOWCASE PARAGRAPH TEXT   //
    $wp_customize->add_setting('showcase_text', array(
    	'default'	=> _x('For Women, By Women', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
    	'label'		=> __('Text', 'wpbootstrap'),
    	'section'	=> 'showcase',
    	'priority'	=> 3
    ));


    ///////////////////////////
    //   ABOUT ANA SECTION   //
    ///////////////////////////
    $wp_customize->add_section('about', array(
    	'title' 		=> __('About Ana', 'wpbootstrap'),
    	'description' 	=> sprintf(__('Options for about', 'wpbootstrap')),
    	'priority' 		=> 140
    ));
    
    //   ABOUT LEFT TEXT   //
    $wp_customize->add_setting('about_text', array(
    	'default'	=> _x('I am a passionate and dedicated level 2 England boxing coach, level 3 personal trainer &amp; qualified in level 2 British Sign Language (BSL).  LGBT women &amp; deaf clients are welcome. I am a coach who smashes barriers and believes that inclusion is key.', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
    $wp_customize->add_control('about_text', array(
    	'label'		=> __('About text', 'wpbootstrap'),
    	'section'	=> 'about',
    	'priority'	=> 1
    ));

    //   ABOUT BUTTON   //
    $wp_customize->add_setting('about_btn', array(
    	'default'	=> _x('http://www.femaleboxingcoach.com/about/', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
    $wp_customize->add_control('about_btn', array(
    	'label'		=> __('About button', 'wpbootstrap'),
    	'section'	=> 'about',
    	'priority'	=> 4
    ));

    //   ABOUT BUTTON TEXT   //
    $wp_customize->add_setting('about_btn_text', array(
    	'default'	=> _x('Find out more', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
    $wp_customize->add_control('about_btn_text', array(
    	'label'		=> __('About button text', 'wpbootstrap'),
    	'section'	=> 'about',
    	'priority'	=> 3
    ));

    //   ABOUT SECTION IMAGE   //
    $wp_customize->add_setting('about_image', array(
    	'default'	=> get_bloginfo('template_directory') . '/images/gallery/boxing-12.jpg',
    	'type'		=> 'theme_mod'
    ));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
		'label'		=> __('About Ana Image', 'wpbootstrap'),
    	'section'	=> 'about',
    	'settings'	=> 'about_image',
    	'priority'	=> 2
	)));


    //////////////////////////////////
    //   FEATURED CLASSES SECTION   //
    //////////////////////////////////
    $wp_customize->add_section('featured', array(
    	'title' 		=> __('Featured Classes', 'wpbootstrap'),
    	'description' 	=> sprintf(__('Options for featured classes', 'wpbootstrap')),
    	'priority' 		=> 150
    ));

    //   FEATURED CLASSES LEFT TITLE   //
    $wp_customize->add_setting('featured_left_heading', array(
    	'default'	=> _x('Boxing Babes', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
	$wp_customize->add_control('featured_left_heading', array(
    	'label'		=> __('Left Heading', 'wpbootstrap'),
    	'section'	=> 'featured',
    	'priority'	=> 1
    ));

    //   FEATURED CLASSES LEFT TEXT   //
    $wp_customize->add_setting('featured_left_text', array(
    	'default'	=> _x('A full body workout. Learn defences, combinations, footwork and pad work. Sessions are focused on fitness and partner work, helping you build confidence, make friends, and strengthen your body and mind.<br>All abilities and fitness levels welcome!', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
    $wp_customize->add_control('featured_left_text', array(
    	'label'		=> __('Left Text', 'wpbootstrap'),
    	'section'	=> 'featured',
    	'priority'	=> 2
    ));

    //   FEATURED CLASSES IMAGE   //
	$wp_customize->add_setting('featured_class_image', array(
    	'default'	=> get_bloginfo('template_directory') . '/images/gallery/boxing-18.jpg',
    	'type'		=> 'theme_mod'
    ));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'featured_class_image', array(
		'label'		=> __('Featured Classes Image', 'wpbootstrap'),
    	'section'	=> 'featured',
    	'settings'	=> 'featured_class_image',
    	'priority'	=> 3
	)));

    //   FEATURED CLASSES RIGHT TITLE   //
    $wp_customize->add_setting('featured_right_heading', array(
    	'default'	=> _x('Boom Box', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
	$wp_customize->add_control('featured_right_heading', array(
    	'label'		=> __('Right Heading', 'wpbootstrap'),
    	'section'	=> 'featured',
    	'priority'	=> 4
    ));
    
    //   FEATURED CLASSES RIGHT TEXT   //
	$wp_customize->add_setting('featured_right_text', array(
    	'default'	=> _x('Recreational boxing for women of all sizes, abilities and fitness levels. A full body workout which includes defences, combinations, footwork and partner work with pads whilst getting fit. At these sessions you get to learn the ropes of boxing and have fun whilst you exercise.<br>Please bring your own gloves if you have, limited pairs available.', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
    $wp_customize->add_control('featured_right_text', array(
    	'label'		=> __('Right Text', 'wpbootstrap'),
    	'section'	=> 'featured',
    	'priority'	=> 5
    ));

    //   FEATURED CLASSES BUTTON   //
    $wp_customize->add_setting('featured_btn', array(
    	'default'	=> _x('http://www.femaleboxingcoach.com/classes/', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
    $wp_customize->add_control('featured_btn', array(
    	'label'		=> __('Featured button', 'wpbootstrap'),
    	'section'	=> 'featured',
    	'priority'	=> 6
    ));

    //   FEATURED CLASSES BUTTON TEXT   //
	$wp_customize->add_setting('featured_btn_text', array(
    	'default'	=> _x('More classes', 'wpbootstrap'),
    	'type'		=> 'theme_mod'
    ));
    $wp_customize->add_control('featured_btn_text', array(
    	'label'		=> __('Featured button text', 'wpbootstrap'),
    	'section'	=> 'featured',
    	'priority'	=> 7
    ));


    //////////////////////////////////
    //   HOMEPAGE GALLERY SECTION   //
    //////////////////////////////////
    $wp_customize->add_section('homegallery', array(
        'title'         => __('Home Gallery', 'wpbootstrap'),
        'description'   => sprintf(__('Options for homegallery', 'wpbootstrap')),
        'priority'      => 160
    ));

    //   GALLERY 1 IMAGE   //
    $wp_customize->add_setting('homegallery_image1', array(
        'default'   => get_bloginfo('template_directory') . '/images/gallery/boxing-9.jpg',
        'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homegallery_image1', array(
        'label'     => __('Homepage Image 1', 'wpbootstrap'),
        'section'   => 'homegallery',
        'settings'  => 'homegallery_image1',
        'priority'  => 1
    )));

    //   GALLERY 2 IMAGE   //
    $wp_customize->add_setting('homegallery_image2', array(
        'default'   => get_bloginfo('template_directory') . '/images/gallery/boxing-8.jpg',
        'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homegallery_image2', array(
        'label'     => __('Homepage Image 2', 'wpbootstrap'),
        'section'   => 'homegallery',
        'settings'  => 'homegallery_image2',
        'priority'  => 2
    )));

    //   GALLERY 3 IMAGE   //
    $wp_customize->add_setting('homegallery_image3', array(
        'default'   => get_bloginfo('template_directory') . '/images/gallery/boxing-13.jpg',
        'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homegallery_image3', array(
        'label'     => __('Homepage Image 3', 'wpbootstrap'),
        'section'   => 'homegallery',
        'settings'  => 'homegallery_image3',
        'priority'  => 3
    )));

    //   GALLERY 4 IMAGE   //
    $wp_customize->add_setting('homegallery_image4', array(
        'default'   => get_bloginfo('template_directory') . '/images/gallery/boxing-14.jpg',
        'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homegallery_image4', array(
        'label'     => __('Homepage Image 4', 'wpbootstrap'),
        'section'   => 'homegallery',
        'settings'  => 'homegallery_image4',
        'priority'  => 4
    )));


    ////////////////////
    //   GOOGLE MAP   //
    ////////////////////
    $wp_customize->add_section('map', array(
        'title'         => __('Google Map', 'wpbootstrap'),
        'description'   => sprintf(__('Options for map', 'wpbootstrap')),
        'priority'      => 170
    ));
    
    //   MAP LINK   //
    $wp_customize->add_setting('map_link', array(
        'default'   => _x('http://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.4702975670543!2d-0.09762168469176209!3d51.50458731873055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604a40aacba9d%3A0xdcf1b63decd0f0c6!2sThe%20Bridge!5e0!3m2!1sen!2suk!4v1571583457303!5m2!1sen!2suk', 'wpbootstrap'),
        'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('map_link', array(
        'label'     => __('Google Map', 'wpbootstrap'),
        'section'   => 'map',
        'priority'  => 1
    ));
   
  }
  add_action('customize_register', 'ana_customize_register');

?>