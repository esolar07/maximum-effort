<?php
/**
 * @package SKT Fitness
 */
?>
 <div class="blog_lists">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
        	<div class="post-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div><!-- post-thumb -->
            <h2><a href="<?php /*the_permalink(); */?>" rel="bookmark"><?php the_title(); ?></a></h2>
        </header><!-- .entry-header -->

        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
           	<?php the_excerpt(); ?>
            <!-- Removing for now
            <p class="read-more"><a href="<?php the_permalink(); ?>"><?php _e('Read More &raquo;','fitness-lite'); ?></a></p>
            -->
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fitness-lite' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'fitness-lite' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
    </article><!-- #post-## -->
</div><!-- blog-post-repeat -->
