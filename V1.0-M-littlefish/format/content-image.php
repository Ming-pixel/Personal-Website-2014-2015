<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Ming_Littlefish
 * @since Ming_Littlefish 1.0
 *
 */
?>
<article class="blog-item format-image" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-data"><span class="day"><?php the_time('d') ?></span><span class="month"><?php the_time('Y年n月') ?></span><span class="post-data-bg"><i class="ti-brush-alt"></i></span></div>

    <?php {
        get_template_part( 'inc/blog-entry-header' ) ;
        get_template_part( 'inc/blog-entry-content' ) ;
    } ?>

</article><!-- #post -->
