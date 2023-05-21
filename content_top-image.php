<?php
/**
 * Template part for displaying the top commented and liked image
 *
 * @package Understrap
 */

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'orderby' => 'comment_count',
    'meta_key' => '_uplike_count-post', // Replace '_liked' with the meta key used by your likes plugin.
    'order' => 'DESC',
);

$top_image_query = new WP_Query($args);

if ($top_image_query->have_posts()) :
    while ($top_image_query->have_posts()) : $top_image_query->the_post();
        the_post_thumbnail();
    endwhile;
    wp_reset_postdata();
endif;
?>
