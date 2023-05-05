<?php
/*
    Template name: Blogpage template
*/
get_header();
?>

<div class="body-content">
        <!-- for banner section -->
        <div class="banner-section-wrap">
            <div class="specer"></div>
        </div>
        <!-- end banner section -->

        <!-- for news section -->
        <duv class="news-section-wrap">
            <div class="container">
                <div class="news-wrap-heading">
                    <h2><?php the_field('add_page_title' , 'option'); ?></h2>
                </div>
                <div class="news-blog">
                    <div class="news-left">
                        <a href="news-details.html">
                        <?php the_post_thumbnail('full'); ?>
                        </a>
                    </div>
                    <div class="news-right">
                        <strong class="date">23 Nov 2021</strong>
                        <a href="news-details.html">
                            <h5>Multinational Enterprises and Tax
                                Administrations: <br> CYPRUS Intends to Espouse OECD
                                Transfer Pricing Guidelines </h5>
                        </a>
                        <div class="news-content">
                            <p>Cyprus is mulling the enabling of transfer pricing regulations in
                                an environment rife with base erosion and profit shifting. Read
                                on to find out about the proposed Transfer Pricing legislation of
                                2021. </p>
                        </div>
                        <div class="read-more">
                            <a href="news-details.html">Read <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/arrow.svg" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="news-blog">
                    <div class="news-left">
                        <a href="news-details.html">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/news/news-2.jpg" alt="news-img">
                        </a>
                    </div>
                    <div class="news-right">
                        <strong class="date">23 Nov 2021</strong>
                        <a href="news-details.html">
                            <h5>Multinational Enterprises and Tax
                                Administrations: <br> CYPRUS Intends to Espouse OECD
                                Transfer Pricing Guidelines </h5>
                        </a>
                        <div class="news-content">
                            <p>Cyprus is mulling the enabling of transfer pricing regulations in
                                an environment rife with base erosion and profit shifting. Read
                                on to find out about the proposed Transfer Pricing legislation of
                                2021. </p>
                        </div>
                        <div class="read-more">
                            <a href="news-details.html">Read <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/arrow.svg" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="news-blog">
                    <div class="news-left">
                        <a href="news-details.html">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/news/news.jpg" alt="news-img">
                        </a>
                    </div>
                    <div class="news-right">
                        <strong class="date">23 Nov 2021</strong>
                        <a href="news-details.html">
                            <h5>Multinational Enterprises and Tax
                                Administrations: <br> CYPRUS Intends to Espouse OECD
                                Transfer Pricing Guidelines </h5>
                        </a>
                        <div class="news-content">
                            <p>Cyprus is mulling the enabling of transfer pricing regulations in
                                an environment rife with base erosion and profit shifting. Read
                                on to find out about the proposed Transfer Pricing legislation of
                                2021. </p>
                        </div>
                        <div class="read-more">
                            <a href="news-details.html">Read <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/arrow.svg" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="news-blog">
                    <div class="news-left">
                        <a href="news-details.html">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/news/news-2.jpg" alt="news-img">
                        </a>
                    </div>
                    <div class="news-right">
                        <strong class="date">23 Nov 2021</strong>
                        <a href="news-details.html">
                            <h5>Multinational Enterprises and Tax
                                Administrations: <br> CYPRUS Intends to Espouse OECD
                                Transfer Pricing Guidelines </h5>
                        </a>
                        <div class="news-content">
                            <p>Cyprus is mulling the enabling of transfer pricing regulations in
                                an environment rife with base erosion and profit shifting. Read
                                on to find out about the proposed Transfer Pricing legislation of
                                2021. </p>
                        </div>
                        <div class="read-more">
                            <a href="news-details.html">Read <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/arrow.svg" alt="icon"></a>
                        </div>
                    </div>
                </div>
                <div class="load-more-btn">
                    <a href="#!">
                        LOAD MORE
                    </a>
                </div>
            </div>
        </duv>
        <!-- end news section -->
    </div>

<?php get_footer();?>