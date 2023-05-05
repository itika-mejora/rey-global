<?php
/*
    Template name: Citizenship-page template
*/
get_header();
?>



<div class="body-content">
        <!-- for banner section -->
        <div class="banner-section-wrap">
            <div class="specer"></div>
        </div>
        <!-- end banner section -->

        <!-- for program section -->
        <div class="program-section">
            <div class="container">
                
                <div class="program-heading">
                    <h2> <?php the_field('banner_heading'); ?></h2>
                </div>
                
                <div class="row">
                <?php if(get_field('banner_content_section') ) { 
                        while(has_sub_field('banner_content_section') ) { ?>
                 
                
                
                    <div class="blog-width-50">
                        <div class="program-content">
                            <?php echo the_sub_field('banner_content');?>
                        </div>
                    </div>

                    <?php }} ?>
                </div>
                
            </div>
        </div>
        <!-- end program section -->

        <!-- for migration-services section -->
        <div class="migration-services-wrap countries-section">
            <div class="container">
                <div class="migration-container">
                <?php if (get_field('eligible_icon')) : 
                     $size = 'full';
                     $eligibility = get_field('eligible_icon');
                    ?>
                    <div class="migration-heading">
                         <?php echo wp_get_attachment_image($eligibility, $size); ?>

                        <div class="vh-line"></div>
                        <h2><?php the_field('eligible_country_heading'); ?></h2>
                    </div>
                    <?php endif;?>
                    <div class="migration-tab-group">                       
                        <div class="tabContainer">
                          <div id="tab1" class="tabContent">
                          
                                <div class="row">
                                <div class="blog-width-100">
                                
                                    
                                    <ul class="citizenship-country">
                                        <?php
                                    $args = array(
                                    'post_type'        => 'country',
                                    'posts_per_page'   => -1,
                                    'category'         => '',
                                    );
                                    $query = new WP_Query( $args ); 
                                    if ( $query->have_posts() ){
                                    while ( $query->have_posts() ) {
                                    $query->the_post(); 

                                      
                                        ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                        </li>
                                        <?php } }?>
                                      
                                        <?php  wp_reset_query(); ?>
                                        
                                        
                                    </ul>
                                    
                                        
                                       
                                    
                                </div>
                              </div>
                               
                          </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end migration-services section -->

        <!-- for philosophy section -->
        <div class="philosophy-wrap">
            <div class="container">
                <div class="vh-line"></div>
                <?php if(get_field('benifit_heading')) :?>
                <div class="philosophy-heading">
                    <h2><?php  the_field('benifit_heading');?></h2>
                </div>
                <?php endif;?>
                <?php if (have_rows('benifit_program')) : ?>
                <div class="row">
                <?php while (have_rows('benifit_program')) : the_row();
                 $size = 'full';
                 $program_icon = get_sub_field('program_icon');
                 $program_heading=get_sub_field('program_heading');
                 $program_subheading=get_sub_field('program_subheading');
                 ?>
                    <div class="blog-width-50">
                        <div class="philosophy-blog">
                        <?php echo wp_get_attachment_image($program_icon, $size); ?>
                            <h4><?php echo $program_heading;?></h4>
                            <?php echo $program_subheading;?>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <!-- <div class="blog-width-50">
                        <div class="philosophy-blog">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/future.svg" alt="icon">
                            <h4>BRIGHTER FUTURE</h4>
                            <p>Each project is handled with the
                                highest degree of professionalism to
                                ensure you receive the highest
                                quality outcome.</p>
                        </div>
                    </div>
                    <div class="blog-width-50">
                        <div class="philosophy-blog">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/calc.svg" alt="icon">
                            <h4>FAVOURABLE TAX
                                REGIMES</h4>
                            <p>All sensitive information is kept
                                private and handled discretely – this
                                is a company policy. 
                                </p>
                        </div>
                    </div>
                    <div class="blog-width-50">
                        <div class="philosophy-blog">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/bag.svg" alt="icon">
                            <h4>FREEDOM OF
                                MOVEMENT</h4>
                            <p>We take all necessary precautions to
                                ensure our transactions and
                                documents are safe and secure.</p>
                        </div>
                    </div> -->
                    <div class="logo-icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/logo-icon-2.svg" alt="icon">
                    </div>
                    
                </div>
                <?php endif;?>
            </div>
        </div>
        <!-- end philosophy section -->

        <!-- for cta section -->
        <div class="cta-wrap top-0">
        <?php if(get_field('touch_hedaing')) :?>
            <div class="cta-container">
                <h2><?php  the_field('touch_hedaing');?></h2>
                <?php  the_field('touch_subheading');?>
                <?php if(get_field('touch_button_link')) :
                
                $touch_button_link = get_field('touch_button_link');
                $touch_link_target = $touch_button_link['target'] ? $touch_button_link['target'] : '_self';
                    
                    ?>
                <a href="<?php  echo $touch_link_target;?>" class="get-in-touch"><?php  echo the_field('touch_button_text');?></a>
                <?php endif;?>
            </div>
            <?php endif;?>
        </div>
        <!-- end cta section -->
    </div>

<?php get_footer(); ?>