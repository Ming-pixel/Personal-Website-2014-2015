<?php
/**
 * The template for displaying posts in the Flash post format
 *
 * @package WordPress
 * @subpackage Ming_Littlefish
 * @since Ming_Littlefish 1.0
 *
 */
?>
<li class="Flash" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="gallery-meta">
            <h3><?php the_title(); ?></h3>
            <p><?php the_time('Y年n月') ?></p>
            <hr/>
            <em>Animation</em>
        </div>
        <?php the_post_thumbnail(); ?>
        <div class="clear"></div>
    </a>
</li>