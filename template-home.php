<?php
/*
    Template name: Homepage template
*/
get_header();
?>


<div class="body-content">
        <!-- for banner section -->
        <?php if (have_rows('banner_details')) : ?>
        <div class="banner-section-wrap">
            <div class="banner-slider">
            
            <?php while (have_rows('banner_details')) : the_row();

                 $size = 'full';
                $banner_images = get_sub_field('banner_images');
                $banner_heading=get_sub_field('banner_heading');
                $banner_subheading=get_sub_field('banner_subheading');
                $banner_side_name=get_sub_field('banner_side_name');
                /*print_r($banner_images);*/
                ?>
               
                <div class="banner-slider-item"  style="background-image: url(<?php echo wp_get_attachment_image_url( $banner_images, $size); ?>);">
                  
                <div class="container">
                <div class="banner-content">
                            <div class="banner-content-blog">
                                <h1><?php echo $banner_heading;?></h1>
                                <strong><?php  echo $banner_subheading;?></strong>
                            </div>
                </div>
                </div>
                <div class="banner-slider-name">
                   <h2><?php  echo $banner_side_name;?></h2>
                </div>
                </div>
                
                <?php endwhile;?>
            </div>
        </div>
        <?php endif;?>
        
        <!-- end banner section -->

        <!-- for company-details-section -->
        <?php if(get_field('details_heading')) :?>
            <div class="company-details">
            <div class="container">
                <div class="about-wrap">
                    <div class="about-wrap-content">
                        <div class="about-blog-heading">
                            <h2><?php  the_field('details_heading');?></h2>
                        </div>
                        <div class="about-blog-content">
                        <?php  the_field('about_company');?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <?php endif;?>
              <div class="service-wrap">
                    <div class="service-wrap-content">
                    <?php if(get_field('commitment_heading')) :?>
                        <div class="service-top-heading">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-logo.svg" alt="icon">
                            <h4><?php  the_field('commitment_heading');?></h4>
                        </div>
                        <?php endif;?>
                        <div class="vh-line"></div>
                        <div class="service-heading">
                        <?php if(get_field('service_heading')) :?>
                            <h2><?php  the_field('service_heading');?></h2>
                        </div>
                        <?php endif;?>
                        <?php if (have_rows('service_listing')) : ?>
                        <ul class="service-listing">
                        <?php while (have_rows('service_listing')) : the_row();
                        $size = '26*21px';
                        $service_image = get_sub_field('service_image');
                        $service_name = get_sub_field('service_name');
                        
                        ?>
                            <li><a href="#!"><strong><img src="<?php echo wp_get_attachment_image_url( $service_image, $size); ?>"></strong><?php echo $service_name;?></a></li>
                            
                            <?php endwhile;?>
                        </ul>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?php if(get_field('service_back_image')) :
            $size= 'full';
                $service_back = get_field('service_back_image');
                ?>
            <div class="bg-img">
                <img src="<?php echo wp_get_attachment_image_url( $service_back, $size); ?>" alt="service-img">
            </div>
            <?php endif;?>
        </div>
        <!-- end about-section -->

        <!-- for commitment section -->
        <div class="commitment-wrap">
            <div class="container">
            <?php if(get_field('commitment__heading')) :?>
                <div class="commitment-heading">
                    <h3><?php  the_field('commitment__heading'); ?></h3>
                </div>
                <?php endif;?>
                <?php if (have_rows('commitment_blog')) : ?>
                <div class="row">
                <?php while (have_rows('commitment_blog')) : the_row();
                   $value= get_sub_field('commitment_class');
                   
                    $commitment = get_sub_field('commitment_text'); 
                    ?>

                   
                    <div class="blog-width-33">
                        <div class="commitment-blog">
                            <strong class="prg-count" data-count="<?php echo $value;?>">0</strong>
                            <p><?php echo  $commitment;?>
                        </p>
                        </div>
                    </div>
                    <?php endwhile;?>
                    </div>
                    <?php endif;?>
                    
                   
            </div>
        </div>
        <!-- end commitment section -->

        <!-- for migration-services section -->
        <div class="migration-services-wrap">
            <div class="container">
                <div class="migration-container">
                    <div class="migration-heading">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/location.svg" alt="icon">
                    <?php if(get_field('migration_heading')) :?>
                        <div class="vh-line"></div>
                        <h2><?php echo the_field('migration_heading');?></h2>
                <?php endif;?>
                    </div>
                    <?php if(get_field('migration_content')) :?>
                    <div class="migartion-content">
                    <?php echo the_field('migration_content');?>
                    </div>
                    <?php endif;?>
                    <!-- ======================= -->
                    <div class="migration-tab-group">
                  
                        
                        <ul class="tabs">
                        <?php if( get_field('migration_tab') ) { ?>
                       <?php  while( has_sub_field('migration_tab') ) { ?>
                          <li><a href="<?php echo get_sub_field('program_link'); ?>"><?php echo get_sub_field('type_of_program'); ?></a></li>
                          <?php } }?>
                        </ul>
                       
                        <div class="tabContainer">
                        <?php if( get_field('program_details') ) { 
                        while( has_sub_field('program_details') ) { ?>  
                          <div id="<?php echo get_sub_field('program_id'); ?>" class="tabContent">
                              <div class="row">
                                  <div class="blog-width-100">
                                      <ul class="citizenship-country">
                                      <?php if( get_field('program_location_details') ) { 
                                            while( has_sub_field('program_location_details') ) { ?>  
                                          <li>
                                              <a href="<?php echo get_sub_field('location_url'); ?>"><?php echo get_sub_field('location_name'); ?> </a>
                                          </li>
                                          <?php } }?>
                                            </ul>
                                  </div>
                              </div>
                          </div>
                          <?php }}?>
                          
                           
                        
                           
                        </div>
                        
                    </div>
                    <!--  -->
                    <?php if(get_field('migartion_botton_link')) :?>
            <div class="about-prog-btn">
                <a href="<?php  the_field('migartion_botton_link');?>"><?php echo the_field('migration_button_text');?>S</a>
            </div>
            <?php endif;?>
                </div>
            </div>
        </div>
        <!-- end migration-services section -->

        <!-- for philosophy section -->
        <div class="philosophy-wrap">
            <div class="container">
                <div class="vh-line"></div>
                <?php if(get_field('principle__heading')) :?>
                <div class="philosophy-heading">
                    <h2><?php  the_field('principle__heading');?></h2>
                </div>
                <?php endif;?>
                <?php if (have_rows('philosophy_blog_details')) : ?>
                <div class="row">
                <?php while (have_rows('philosophy_blog_details')) : the_row();  
                $size='full';
                $philosophy_image = get_sub_field('blog_icon');
                $philosophy_heading = get_sub_field('philosophy_blog_heading');
                $philosophy_content = get_sub_field('philosophical_blog_content');
                ?>

                    <div class="blog-width-50">
                        <div class="philosophy-blog">
                            <img src="<?php echo wp_get_attachment_image_url( $philosophy_image, $size );?>" alt="icon">
                            <h4><?php echo $philosophy_heading;?></h4>
                            <?php echo $philosophy_content;?>
                        </div>
                    </div>
                    <?php endwhile;?>
                   
                    <div class="logo-icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/logo-icon-2.svg" alt="icon">
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
        <!-- end philosophy section -->
        <?php
            $news = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 1,
            ));
            if ($news->have_posts()) :
            ?>
        <div class="news-section">
            <div class="container">
            <?php if (get_field('news_heading')) : ?>
                <div class="news-wrap-heading">
                    <h2><?php the_field('news_heading'); ?></h2>
                </div>
                <?php endif; ?>
                <div class="news-slider">
                <?php
                    while ($news->have_posts()) : $news->the_post();
                        $news_id = $news->id;
                    ?>
                    <div class="news-item">
                        <div class="news-block-content">
                            <div class="news-left">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news/news.jpg" alt="news-img">
                                </a>
                            </div>
                            <div class="news-right">
                                <strong class="date"><?php the_time('d.m.Y'); ?></strong>
                                <a href="<?php the_permalink(); ?>">
                                    <h5><?php the_title(); ?></h5>
                                </a>
                                <div class="news-content">
                                <?php get_the_excerpt(); ?>
                                </div>
                                <div class="read-more">
                                    <a href="<?php the_permalink(); ?>">Read <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/arrow.svg" alt="icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata();?> 
                    <?php wp_reset_query(); 
                    ?>
                   
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- for why-us section -->
        <?php
    $news = new WP_Query(array(
        'post_type' => 'news',
        'posts_per_page' => 1,

    ));
    if ($news->have_posts()) :
    ?>
            <div class="why-us-wrap">
            <div class="why-us-container">
                <div class="why-us-slider">
                <?php
                    while ($news->have_posts()) : $news->the_post();
                        $news_id = $news->id;
                        $url = wp_get_attachment_image_src( get_post_thumbnail_id($news->ID), 'blog-thumb'); ?>

                    

                    <div class="why-us-slider-item">
                        <div class="why-us-content">
                            <div class="map-icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/cyprus.svg" alt="cyprus-map">
                            </div>
                            <div class="vh-line"></div>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();?>
                        </div>
                        <div class="bg-img-cyprus">
                            <img src="<?php echo $url[0];?>" alt="cyprus-img">
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata(); ?>
                    <?php wp_reset_query(); ?>
                   
                </div>
            </div>
        </div>
        <?php endif;?>
       
        <!-- end why-us section -->

        <!-- for cta section -->
        <?php if (get_field('touch_heading')) :?>
                  
                    
        <div class="cta-wrap">
            <div class="cta-container">
                <h2><?php the_field('touch_heading')?></h2>
                <p><?php echo get_field('touch_content');?></p>
                <a href="<?php echo get_field('touch_button_link');?>" class="get-in-touch"><?php echo get_field('touch_button_text');?></a>
            </div>
        </div>
        <?php endif;?>
        <!-- end cta section -->
    </div>

<?php get_footer(); ?>