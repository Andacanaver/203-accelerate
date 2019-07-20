<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
    
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
            <div class="about-hero">
                <?php while ( have_posts() ) : the_post(); 
                    $about_hero = get_field('about_hero');
                ?>
                    <?php echo $about_hero ?>
                <?php endwhile; // end of the loop. ?>
            </div>
		</div><!-- .main-content -->
	</div><!-- #primary -->

    <section class="about-section">
        <div class="about-content">
            <?php while ( have_posts() ) : the_post();
                $size = "medium";
                $about_title = get_field("about_title");
                $about_title_description = get_field('about_title_description');
                $service_1_title = get_field('service_1_title');
                $service_2_title = get_field('service_2_title');
                $service_3_title = get_field('service_3_title');
                $service_4_title = get_field('service_4_title');
                $service_1_description = get_field('service_1_description');
                $service_2_description = get_field('service_2_description');
                $service_3_description = get_field('service_3_description');
                $service_4_description = get_field('service_4_description');
                $service_1_image = get_field('service_1_image');
                $service_2_image = get_field('service_2_image');
                $service_3_image = get_field('service_3_image');
                $service_4_image = get_field('service_4_image');
            ?>
            
            <section class="about-content">
                <div class="content-wrapper">
                    <div class="about-title">
                        <h5><?php echo $about_title ?></h5>
                        <p><?php echo $about_title_description ?></p>
                    </div>
                    <div class="service-1">
                        <div class="service-image">
                            <?php if($service_1_image) {
                                echo wp_get_attachment_image( $service_1_image, $size);
                            } ?>
                        </div>
                        <div class="service-right-content">
                            <h2><?php echo $service_1_title ?></h2>
                            <p><?php echo $service_1_description ?></p>
                        </div>
                    </div>
                    <div class="service-2">
                        <div class="service-left-content">
                            <h2><?php echo $service_2_title ?></h2>
                            <p><?php echo $service_2_description ?></p>
                        </div>
                        <div class="service-image">
                            <?php if($service_2_image) {
                                echo wp_get_attachment_image( $service_2_image, $size);
                            } ?>
                        </div>
                    </div>
                    <div class="service-3">
                        <div class="service-image">
                            <?php if($service_3_image) {
                                echo wp_get_attachment_image( $service_3_image, $size);
                            } ?>
                        </div>
                        <div class="service-right-content">
                            <h2><?php echo $service_3_title ?></h2>
                            <p><?php echo $service_3_description ?></p>
                        </div>
                    </div>
                    <div class="service-4">
                        <div class="service-left-content">
                            <h2><?php echo $service_4_title ?></h2>
                            <p><?php echo $service_4_description ?></p>
                        </div>
                        <div class="service-image">
                            <?php if($service_4_image) {
                                echo wp_get_attachment_image( $service_4_image, $size);
                            } ?>
                        </div>
                    </div>
                </div>
            
            </section>
            
            
            <?php endwhile; // end of the loop. ?>
        </div>
    </section>
    <section class="about-bottom">
        <div class="about-bottom-content">
            <p><span><?php the_content(); ?></span>
            <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a></p>
        </div>
    </section>
    
<?php get_footer(); ?>
