<?php
/**
 * The template for displaying all pages
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

	<div id="primary" class="site-content sidebar">
		<div class="main-content whoops" role="main">
            <div class="whoops-map">
                <img src="http://localhost:8888/accelerate/wp-content/uploads/2019/07/404-map.png" alt="404-map">
            </div>
            <div class="whoops-content">
                <h1>Whoops, took a wrong turn...</h1>
                <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
                <p>Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href="<?php echo site_url('/case-studies/') ?>">work</a></p>
            </div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
