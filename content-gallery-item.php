<?php
/**
 * Template part for displaying an image in the gallery
 *
 * @package Understrap
 */

$post_link = get_field('image_post_link');

if ($post_link) :
?>
    <a href="<?php echo esc_url(get_permalink($post_link)); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php
else :
    the_post_thumbnail();
endif;
?>

