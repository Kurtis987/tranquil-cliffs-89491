<?php 
/**
* Template Name: front-page
**/

get_header(); ?>
      <div class="row">
        <div class="col-sm-12 blog-main">
          <section id="portfolio">
            <h1 class="portfolio"><?php echo get_theme_mod('portfolio_heading', 'Portfolio') ?></h1>


            <p class="portfolio"><?php echo get_theme_mod('portfolio_text', 'Showcase your work effectively and in an attractive way that your prospective clients will love.') ?></p>

            <div id="portfolio-wrapper">
              <div class="wrapper">
                <img src="<?php echo get_theme_mod('portfolio_img1', get_bloginfo('template_url').'/images/canvas.jpg')
                ?>" alt="image placeholder" class="portfolio-img">
                <div class="modalbox">
                  <div class="box">
                    <p class="title"><?php echo get_theme_mod('card_heading_1', 'Business Cards') ?></p>
                    <div class="content">
                      <p><?php echo get_theme_mod('card_signature_1', 'Cali') ?></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="wrapper">
                <img src="<?php echo get_theme_mod('portfolio_img2', get_bloginfo('template_url').'/images/apple.jpg')
                ?>" alt="image placeholder" class="portfolio-img">
                <div class="modalbox">
                  <div class="box">
                    <p class="title"><?php echo get_theme_mod('card_heading_2', 'Photography') ?></p>
                    <div class="content">
                      <p><?php echo get_theme_mod('card_signature_2', 'Cali') ?></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="wrapper">
                <img src="<?php echo get_theme_mod('portfolio_img3', get_bloginfo('template_url').'/images/glasses.jpg')
                ?>" alt="image placeholder" class="portfolio-img">
                <div class="modalbox">
                  <div class="box">
                    <p class="title"><?php echo get_theme_mod('card_heading_3', 'Research') ?></p>
                    <div class="content">
                      <p><?php echo get_theme_mod('card_signature_3', 'Cali') ?></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="wrapper">
                <img src="<?php echo get_theme_mod('portfolio_img4', get_bloginfo('template_url').'/images/monitor.jpg')
                ?>" alt="image placeholder" class="portfolio-img">
                <div class="modalbox">
                  <div class="box">
                    <p class="title"><?php echo get_theme_mod('card_heading_4', 'Photography') ?></p>
                    <div class="content">
                      <p><?php echo get_theme_mod('card_signature_4', 'Cali') ?></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="wrapper">
                <img src="<?php echo get_theme_mod('portfolio_img5', get_bloginfo('template_url').'/images/utensils.jpg')
                ?>" alt="image placeholder" class="portfolio-img">
                <div class="modalbox">
                  <div class="box">
                    <p class="title"><?php echo get_theme_mod('card_heading_5', 'Tools of the Trade') ?></p>
                    <div class="content">
                      <p><?php echo get_theme_mod('card_signature_5', 'Cali') ?></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="wrapper">
                <img src="<?php echo get_theme_mod('portfolio_img6', get_bloginfo('template_url').'/images/canvas.jpg')
                ?>" alt="image placeholder" class="portfolio-img">
                <div class="modalbox">
                  <div class="box">
                    <p class="title"><?php echo get_theme_mod('card_heading_6', 'Business Cards') ?></p>
                    <div class="content">
                      <p><?php echo get_theme_mod('card_signature_6', 'Cali') ?></p>
                    </div>
                  </div>
                </div>
              </div>

              
              
            </div><!-- /portfolio-wrapper --> 
          </section><!-- /portfolio -->


    <section id="about">
      <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="top-button" class="up" src="wp-content/themes/caliTheme/images/up.png" alt="home"></a>
      
      <h1><?php echo get_theme_mod('about_heading', 'About') ?></h1>
      <h4><?php echo get_theme_mod('about_sub_heading', 'Use this section to showcase important details about your business') ?></h4>
      <div class="row">
        <div class="col-lg-4 col-md-4 left-column">
          <?php echo get_theme_mod('about_left_column', 'Everything you see here is responsive and mobile-friendly.') ?>
        </div>
        <div class="col-lg-4 col-md-4"><p>
          <?php echo get_theme_mod('about_top_middle_column', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.') ?></p>


         <p>    
           <?php echo get_theme_mod('about_middle_column', 'Pellentesque scelerisque nibh ac risus facilisis volutpat ac vitae urna. Aenean eleifend ut libero eget adipiscing. Aliquam tincidunt, est eget cursus feugiat, risus arcu adipiscing massa, ullamcorper facilisis erat est eu metus.') ?></p>

          <p> <?php echo get_theme_mod('about_bottom_middle_column', 'Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.') ?></p>
         </div>
         <div class="col-lg-4 col-md-4">
          <p><img class="skills" src="<?php echo get_theme_mod('about_img1', get_bloginfo('template_url').'/images/red80.png')
                ?>" alt="80%"/><?php echo get_theme_mod('img_description_1', 'YOUR SKILL #1')
                ?></p>
          <p><img class="skills" src="<?php echo get_theme_mod('about_img2', get_bloginfo('template_url').'/images/green90.png') ?>" alt="90%"/><?php echo get_theme_mod('img_description_2', 'YOUR SKILL #2')
                ?></p>
          <p><img class="skills" src="<?php echo get_theme_mod('about_img3', get_bloginfo('template_url').'/images/blue75.png') ?>" alt="75%"/><?php echo get_theme_mod('img_description_3', 'YOUR SKILL #3')
                ?></p>
          <p><img class="skills" src="<?php echo get_theme_mod('about_img4', get_bloginfo('template_url').'/images/orange86.png') ?>" alt="86%"/><?php echo get_theme_mod('img_description_4', 'YOUR SKILL #4')
                ?></p>
          </div>
          </div> <!-- end row -->
          <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="middle-button" class="up" src="wp-content/themes/caliTheme/images/up.png" alt="home"></a>
        </section> <!-- end about -->
        
        <section id="team">

          <h1><?php echo get_theme_mod('team_heading', 'Your Team') ?></h1>
          <h4><?php echo get_theme_mod('team_sub_heading', 'Prove that you have real people working for you with some nice looking profile pictures') ?></h4>
          <img class="photos" src="<?php echo get_theme_mod('team_member1', get_bloginfo('template_url').'/images/team1.jpg') ?>" alt="team member 1"/>
          <img class="photos" src="<?php echo get_theme_mod('team_member2', get_bloginfo('template_url').'/images/team2.jpg') ?>" alt="team member 2"/>
          <img class="photos" src="<?php echo get_theme_mod('team_member3', get_bloginfo('template_url').'/images/team3.jpg') ?>" alt="team member 3"/> 
          <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="bottom-button" class="up" src="wp-content/themes/caliTheme/images/up.png" alt="home"></a>
        </section><!-- /team -->
        
        </div><!-- /.blog-main -->
      </div><!-- /.row -->
<?php get_footer(); ?>