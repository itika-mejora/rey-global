
<?php
/**
 * The template for displaying all single posts.
 *
 * 
 */

get_header(); ?>
<div class="body-content">
        <!-- for banner section -->
        <div class="banner-section-wrap">
			 
            <div class="cyprus-bg-img">
			<?php the_post_thumbnail('full'); ?>
            </div>
        </div>
        <!-- end banner section -->
        
        <!-- for cyprus-program section -->
        <div class="cyprus-program-section">
            <div class="container">
                <div class="cyprus-program-wrap">
                    <div class="cyprus-program-heading">
                        <?php if (get_field('payment_section_icon')) : 
                        $size = 'full';
                        $eligibility = get_field('payment_section_icon');
                        ?>
                        
                        <div class="icon-logo-img">
                        <?php echo wp_get_attachment_image($eligibility, $size); ?>
                        </div>
                        <?php endif;?>
                        <?php if (get_field('permanent_programme')) : ?>
                        <div class="vh-line"></div>
                        <h2><?php echo the_field('permanent_programme');?></h2>
                        <?php endif;?>
                    </div>
                    <?php if (get_field('permanent_programme_content')) : ?>
                    <div class="cyprus-program-content">
                    <?php echo the_field('permanent_programme_content');?>
                    </div>
                    <?php endif;?>
                    <div class="all-steps-wrap">
                    <?php if (have_rows('payment_details')) : ?>
                        <div class="row">
                        <?php while (have_rows('payment_details')) : the_row();

                            $size = 'full';
                            $payment_icon = get_sub_field('payment_icon');
                            ?>

                            <div class="blog-width-33">
                                <div class="all-steps-content">
                                    <div class="steps-img">
                                    <?php echo wp_get_attachment_image($payment_icon, $size); ?>
                                    </div>
                                    <h6><?php echo get_sub_field('payment');?></h6>
                                    <?php echo get_sub_field('payment_content');?>
                                </div>
                            </div>
                            <?php endwhile;?>
                            <!-- <div class="blog-width-33">
                                <div class="all-steps-content">
                                    <div class="steps-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/travel-icon.svg" alt="icon">
                                    </div>
                                    <h6>Visa-Free Travel</h6>
                                    <p>Successful applicants can freely
                                        travel without a visa across all EU
                                        member states.</p>
                                </div>
                            </div>
                            <div class="blog-width-33">
                                <div class="all-steps-content">
                                    <div class="steps-img time-width">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/fast-icon.svg" alt="icon">
                                    </div>
                                    <h6>Fast Processing Time</h6>
                                    <p>Successful applicants have their
                                        applications processed within 2
                                        months.</p>
                                </div>
                            </div> -->
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cyprus-program section -->
        
        <!-- for philosophy section -->
        <div class="philosophy-wrap cyprus-residency-wrap">
            <div class="container">
            <?php if (get_field('citizenship_section_heading')) : ?>
                <div class="philosophy-heading">
                    <h2><?php echo the_field('citizenship_section_heading');?></h2>
                </div>
                <?php endif;?>
                <?php if (have_rows('citizenship_details')) : ?>
                <div class="row">
                <?php while (have_rows('citizenship_details')) : the_row();

                    $size = 'full';
                    $citizenship_icon = get_sub_field('citizenship_icon');
                    ?>

                    <div class="blog-width-50">
                        <div class="philosophy-blog">
                        <?php echo wp_get_attachment_image($citizenship_icon, $size); ?>
                        <?php echo get_sub_field('citizenship_details');?>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php if (get_field('icon')) : 
                        $size = 'full';
                        $icon = get_field('icon');
                        ?>
                    <div class="logo-icon">
                    <?php echo wp_get_attachment_image($icon, $size); ?>
                    </div>
                    <?php endif;?>
                </div>
                <?php endif;?>
            </div>
        </div>
        <!-- end philosophy section -->

        <!-- for residency-wrap  -->
        <div class="residency-section">
            <div class="container">
            
            <div class="row">
            <?php if(get_field('criteria_details') ) { 
                        while(has_sub_field('criteria_details') ) { ?>
                    <div class="blog-width-50">
                        <div class="<?php echo get_sub_field('criteria_class');?>">
                            <h4><?php echo get_sub_field('criteria_data_heading');?></h4>
                            <div class="<?php echo get_sub_field('data_class');?>">
                            <ul>
                                <?PHP
                                if(get_sub_field('criteria_data_details') ) { 
                                while(has_sub_field('criteria_data_details') ) { ?>
                                <li><?php echo get_sub_field('data_listing');?></li>
                                <?php } }?>
                                
                            </ul>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                    <!-- <div class="blog-width-50">
                        <div class="procedure-wrap">
                            <div class="procedure-heading">
                                <h5>PROCEDURE</h5>
                            </div>
                            <ul class="procedure-list">
                                <li>
                                    <h3>QUALIFYING INVESTMENT</h3>
                                    <p>Applicants must ﬁnalise their real estate investment in Cyprus before applying for Permanent Residence.</p>
                                </li>
                                <li>
                                    <h3>APPLY FOR PERMANENT RESIDENCE IN  CYPRUS</h3>
                                    <p>Applications must be submitted to the Civil
                                        Registry and Migration Department. Letters of
                                        approval are received within 2 months.</p>
                                </li>
                                <li>
                                    <h3>VISIT THE ISLAND IN ORDER FOR THEIR
                                        BIOMETRICS TO BE RECORDED</h3>
                                    <p>All applicants must visit the island in order for their
                                        biometrics to be recorded.
                                        </p>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end residency-wrap  -->

        <!-- for cta section -->
        <div class="cta-wrap no-margin">
        <?php if ( is_active_sidebar( 'footer-upper-widget' )) : ?>
            <div class="cta-container">
            <?php dynamic_sidebar( 'footer-upper-widget' ); ?>
            </div>
            <?php endif;?>
        </div>
        <!-- end cta section -->
    </div>


<?php get_footer(); ?>
