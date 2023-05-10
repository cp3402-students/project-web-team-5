<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

			<main class="site-main" id="main">
			<?php $Credo = array(
				// Create the query loop to show the the websites credo
				'post_type' => 'post' ,
				'orderby' => 'date' ,
				'order' => 'DESC' ,
				'posts_per_page' => 6,
				'category_name' => 'credo',
				'paged' => get_query_var('paged'),
				'post_parent' => $parent
			); ?>

			<?php
			// Shows the websites credo
				$CredoQuery = new WP_Query($Credo);
				if ( $CredoQuery->have_posts() ) {
					// Start the Loop.
					while ( $CredoQuery->have_posts() ) {
						$CredoQuery->the_post();
						
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
			?>

			<?php $Committee = array(
				// Create the query loop to show the the websites committee memebers 
				'post_type' => 'post' ,
				'orderby' => 'date' ,
				'order' => 'DESC' ,
				'posts_per_page' => 6,
				'category_name' => 'committee',
				'paged' => get_query_var('paged'),
				'post_parent' => $parent
			); ?>

			<?php
				$CommitteeQuery = new WP_Query($Committee);
				// Shows the websites committee memebers 
				if ( $CommitteeQuery->have_posts() ) {
					// Start the Loop.
					while ( $CommitteeQuery->have_posts() ) {
						$CommitteeQuery->the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
			?>

			<?php $Sponsors = array(
				// Create the query loop to show the the websites Sponsors
				'post_type' => 'post' ,
				'orderby' => 'date' ,
				'order' => 'DESC' ,
				'posts_per_page' => 6,
				'category_name' => 'sponsors',
				'paged' => get_query_var('paged'),
				'post_parent' => $parent
			); ?>

			<?php
				echo ("Sponsers:");
				// Shows the websites Sponsors
				$SponsorQuery = new WP_Query($Sponsors);
				if ( $SponsorQuery->have_posts() ) {
					// Start the Loop.
					while ( $SponsorQuery->have_posts() ) {
						$SponsorQuery->the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
			?>

			<?php $RadioStations = array(
				// Create the query loop to show the the websites Radio Sponsors
				'post_type' => 'post' ,
				'orderby' => 'date' ,
				'order' => 'ASC' ,
				'posts_per_page' => 6,
				'category_name' => 'RadioSponsors',
				'paged' => get_query_var('paged'),
				'post_parent' => $parent
			); ?>

			<?php
				echo ("Country Music Radio Stations that are Valued
				Supporters of The Townsville and Thuringowa
				Country Music Assn.");
				// Shows the websites Radio Sponsors
				$RadioQuery = new WP_Query($RadioStations);
				if ( $RadioQuery->have_posts() ) {
					// Start the Loop.
					while ( $RadioQuery->have_posts() ) {
						$RadioQuery->the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
			?>

			</main>

			<?php
			// Display the pagination component.
			understrap_pagination();

			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
