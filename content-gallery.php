<?php
/**
 * Template part for displaying the gallery
 *
 * @package Understrap
 */

if (has_block('gallery')) :
    $gallery_block = get_post_gallery();
    $attachments = $gallery_block['ids'];
    $attachments = explode(',', $attachments);

    echo '<div class="gallery-container">';
    foreach ($attachments as $attachment_id) :
        echo '<div class="gallery-item">';
        setup_postdata($attachment_id);
        get_template_part('template-parts/content', 'gallery-item');
        echo '</div>';
    endforeach;
    wp_reset_postdata();
    echo '</div>';
endif;

// Display the top commented and liked image
get_template_part('template-parts/content', 'top-image');

?>
