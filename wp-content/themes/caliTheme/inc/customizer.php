<?php

   function cali_customize_register($cali_customize){
   //portfolio section
   	$cali_customize->add_section('portfolio', array(
   		'title' 	=>__('Portfolio', 'caliTheme'),
   		 'description' => sprintf(__('options for portfolio', 'caliTheme')),
   		 'priority' 	=> 130
   	));
   
   	$cali_customize->add_setting('portfolio_heading', array(
   		'default' => _x('Portfolio', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('portfolio_heading', array(
   		'label'	=> __('Heading', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 1
   	));

   	$cali_customize->add_setting('portfolio_text', array(
   		'default' => _x('Showcase your work effectively and in an attractive way that your prospective clients will love.', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('portfolio_text', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 2
   	));

   	$cali_customize->add_setting('portfolio_img1', array(
   		'default' => get_bloginfo('template_directory').'/images/canvas.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'portfolio_img1', array(
   			'label'	=> __('portfolio image 1', 'caliTheme'),
   			'section' => 'portfolio',
   			'settings' => 'portfolio_img1',
   			'priority' 	=> 3
   		)));

   	$cali_customize->add_setting('card_heading_1', array(
   		'default' => _x('Business Cards', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_heading_1', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 4
   	));

   	$cali_customize->add_setting('card_signature_1', array(
   		'default' => _x('Cali', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_signature_1', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 5
   	));

   	$cali_customize->add_setting('portfolio_img2', array(
   		'default' => get_bloginfo('template_directory').'/images/apple.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'portfolio_img2', array(
   			'label'	=> __('portfolio image 2', 'caliTheme'),
   			'section' => 'portfolio',
   			'settings' => 'portfolio_img2',
   			'priority' 	=> 6
   		)));
    
    $cali_customize->add_setting('card_heading_2', array(
   		'default' => _x('Photography', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_heading_2', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 7
   	));

   	$cali_customize->add_setting('card_signature_2', array(
   		'default' => _x('Cali', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_signature_2', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 8
   	));


   	$cali_customize->add_setting('portfolio_img3', array(
   		'default' => get_bloginfo('template_directory').'/images/glasses.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'portfolio_img3', array(
   			'label'	=> __('portfolio image 3', 'caliTheme'),
   			'section' => 'portfolio',
   			'settings' => 'portfolio_img3',
   			'priority' 	=> 9
   		)));

    $cali_customize->add_setting('card_heading_3', array(
   		'default' => _x('Research', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_heading_3', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 10
   	));

   	$cali_customize->add_setting('card_signature_3', array(
   		'default' => _x('Cali', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_signature_3', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 11
   	));

   	$cali_customize->add_setting('portfolio_img4', array(
   		'default' => get_bloginfo('template_directory').'/images/monitor.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'portfolio_img4', array(
   			'label'	=> __('portfolio image 4', 'caliTheme'),
   			'section' => 'portfolio',
   			'settings' => 'portfolio_img4',
   			'priority' 	=> 12
   		)));

   	$cali_customize->add_setting('card_heading_4', array(
   		'default' => _x('Photography', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_heading_4', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 13
   	));

   	$cali_customize->add_setting('card_signature_4', array(
   		'default' => _x('Cali', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_signature_4', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 14
   	));

   	$cali_customize->add_setting('portfolio_img5', array(
   		'default' => get_bloginfo('template_directory').'/images/utensils.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'portfolio_img5', array(
   			'label'	=> __('portfolio image 5', 'caliTheme'),
   			'section' => 'portfolio',
   			'settings' => 'portfolio_img5',
   			'priority' 	=> 15
   		)));

   	$cali_customize->add_setting('card_heading_5', array(
   		'default' => _x('Tools of the Trade', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_heading_5', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 16
   	));

   	$cali_customize->add_setting('card_signature_5', array(
   		'default' => _x('Cali', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_signature_5', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 17
   	));

   	$cali_customize->add_setting('portfolio_img6', array(
   		'default' => get_bloginfo('template_directory').'/images/canvas.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'portfolio_img6', array(
   			'label'	=> __('portfolio image 6', 'caliTheme'),
   			'section' => 'portfolio',
   			'settings' => 'portfolio_img6',
   			'priority' 	=> 18
   		)));
   	$cali_customize->add_setting('card_heading_6', array(
   		'default' => _x('Business Cards', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_heading_6', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 19
   	));

   	$cali_customize->add_setting('card_signature_6', array(
   		'default' => _x('Cali', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('card_signature_6', array(
   		'label'	=> __('Text', 'caliTheme'),
   		'section' => 'portfolio',
   		'priority' 	=> 20
   	));


//about section
	
   	$cali_customize->add_section('about', array(
   		'title' 	=>__('About', 'caliTheme'),
   		 'description' => sprintf(__('options for about', 'caliTheme')),
   		 'priority' 	=> 131
   	));
	$cali_customize->add_setting('about_bg_color', array(
   		'default' => '#272727',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Color_Control( $cali_customize, 'bg_color_control', array(
   		'label' => __('background color', 'caliTheme'),
   		'section' => 'about',
   		'priority' => 1,
   		'settings' => 'about_bg_color'

   	)));
   	$cali_customize->add_setting('about_heading', array(
   		'default' => _x('About', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('about_heading', array(
   		'label'	=> __('Heading', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 1
   	));

   	$cali_customize->add_setting('about_sub_heading', array(
   		'default' => _x('Use this section to showcase important details about your business', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('about_sub_heading', array(
   		'label'	=> __('Sub Heading', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 2
   	));

   	$cali_customize->add_setting('about_left_column', array(
   		'default' => _x('Everything you see here is responsive and mobile-friendly.', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('about_left_column', array(
   		'label'	=> __('Left Column', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 3
   	));

   	$cali_customize->add_setting('about_top_middle_column', array(
   		'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('about_top_middle_column', array(
   		'label'	=> __('Top Middle Column', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 4
   	));

   	$cali_customize->add_setting('about_middle_column', array(
   		'default' => _x('Pellentesque scelerisque nibh ac risus facilisis volutpat ac vitae urna. Aenean eleifend ut libero eget adipiscing. Aliquam tincidunt, est eget cursus feugiat, risus arcu adipiscing massa, ullamcorper facilisis erat est eu metus.', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('about_middle_column', array(
   		'label'	=> __('Middle Column', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 5
   	));


	$cali_customize->add_setting('about_bottom_middle_column', array(
   		'default' => _x('Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('about_bottom_middle_column', array(
   		'label'	=> __('Bottom Middle Column', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 6
   	));
   

   $cali_customize->add_setting('about_img1', array(
   		'default' => get_bloginfo('template_directory').'/images/red80.png',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'about_img1', array(
   			'label'	=> __('image 1', 'caliTheme'),
   			'section' => 'about',
   			'settings' => 'about_img1',
   			'priority' 	=> 7
   		)));

   	$cali_customize->add_setting('img_description_1', array(
   		'default' => _x('YOUR SKILL #1', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('img_description_1', array(
   		'label'	=> __('img 1 description', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 8
   	));

   $cali_customize->add_setting('about_img2', array(
   		'default' => get_bloginfo('template_directory').'/images/green90.png',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'about_img2', array(
   			'label'	=> __('image 2', 'caliTheme'),
   			'section' => 'about',
   			'settings' => 'about_img2',
   			'priority' 	=> 9
   		)));

   	$cali_customize->add_setting('img_description_2', array(
   		'default' => _x('YOUR SKILL #2', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('img_description_2', array(
   		'label'	=> __('img  2 description', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 10
   	));

   $cali_customize->add_setting('about_img3', array(
   		'default' => get_bloginfo('template_directory').'/images/blue75.png',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'about_img3', array(
   			'label'	=> __('image 3', 'caliTheme'),
   			'section' => 'about',
   			'settings' => 'about_img3',
   			'priority' 	=> 11
   		)));

   	$cali_customize->add_setting('img_description_3', array(
   		'default' => _x('YOUR SKILL #3', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('img_description_3', array(
   		'label'	=> __('img 3 description', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 12
   	));

	$cali_customize->add_setting('about_img4', array(
   		'default' => get_bloginfo('template_directory').'/images/orange86.png',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'about_img4', array(
   			'label'	=> __('image 4', 'caliTheme'),
   			'section' => 'about',
   			'settings' => 'about_img4',
   			'priority' 	=> 13
   		)));

   	$cali_customize->add_setting('img_description_4', array(
   		'default' => _x('YOUR SKILL #4', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('img_description_4', array(
   		'label'	=> __('img 4 description', 'caliTheme'),
   		'section' => 'about',
   		'priority' 	=> 14
   	));


//team section
	$cali_customize->add_section('team', array(
   		'title' 	=>__('Your Team', 'caliTheme'),
   		 'description' => sprintf(__('options for about', 'caliTheme')),
   		 'priority' 	=> 132
   	));
	$cali_customize->add_setting('team_heading', array(
   		'default' => _x('Your Team', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('team_heading', array(
   		'label'	=> __('Heading', 'caliTheme'),
   		'section' => 'team',
   		'priority' 	=> 1
   	));

   	$cali_customize->add_setting('team_sub_heading', array(
   		'default' => _x('Prove that you have real people working for you with some nice looking profile pictures', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('team_sub_heading', array(
   		'label'	=> __('Sub heading', 'caliTheme'),
   		'section' => 'team',
   		'priority' 	=> 1
   	));

   	$cali_customize->add_setting('team_member1', array(
   		'default' => get_bloginfo('template_directory').'/images/team1.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'team_member1', array(
   			'label'	=> __('team member 1', 'caliTheme'),
   			'section' => 'team',
   			'settings' => 'team_member1',
   			'priority' 	=> 2
   		)));

   	$cali_customize->add_setting('team_member2', array(
   		'default' => get_bloginfo('template_directory').'/images/team2.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'team_member2', array(
   			'label'	=> __('team member 2', 'caliTheme'),
   			'section' => 'team',
   			'settings' => 'team_member2',
   			'priority' 	=> 3
   		)));

  	$cali_customize->add_setting('team_member3', array(
   		'default' => get_bloginfo('template_directory').'/images/team3.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'team_member3', array(
   			'label'	=> __('team member 3', 'caliTheme'),
   			'section' => 'team',
   			'settings' => 'team_member3',
   			'priority' 	=> 3
   		)));

//header
	$cali_customize->add_section('header', array(
   		'title' 	=>__('Header', 'caliTheme'),
   		 'description' => sprintf(__('options for header', 'caliTheme')),
   		 'priority' 	=> 100
   	));
	$cali_customize->add_setting('background_img', array(
   		'default' => get_bloginfo('template_directory').'/images/ggbridge.jpg',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Image_Control($cali_customize,'background_img', array(
   			'label'	=> __('background image', 'caliTheme'),
   			'section' => 'header',
   			'settings' => 'background_img',
   			'priority' 	=> 1
   		)));

   	//
   	$cali_customize->add_setting('navbar_bg_color', array(
   		'default' => '#292027',
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control(new WP_Customize_Color_Control( $cali_customize, 'bg_color_control', array(
   		'label' => __('background color', 'caliTheme'),
   		'section' => 'header',
   		'priority' => 2,
   		'settings' => 'navbar_bg_color'

   	)));

   $cali_customize->add_setting('link1', array(
   		'default' => _x('Portfolio', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('link1', array(
   		'label'	=> __('Link 1', 'caliTheme'),
   		'section' => 'header',
   		'priority' 	=> 3
   	));

   $cali_customize->add_setting('link2', array(
   		'default' => _x('About', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('link2', array(
   		'label'	=> __('Link 2', 'caliTheme'),
   		'section' => 'header',
   		'priority' 	=> 3
   	));

   	   $cali_customize->add_setting('link3', array(
   		'default' => _x('Team', 'caliTheme'),
   		'type'		=> 'theme_mod'
   	));

   	$cali_customize->add_control('link3', array(
   		'label'	=> __('Link 3', 'caliTheme'),
   		'section' => 'header',
   		'priority' 	=> 3
   	));


   }
   add_action('customize_register', 'cali_customize_register');

?>