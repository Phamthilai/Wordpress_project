<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header(); ?>

<?php do_action( 'vw_painter_pageleft_top' ); ?>

<div class="container">
    <div class="middle-align row">
		<div class="col-lg-4">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>
		<div class="col-lg-8" id="content-vw" >
			<?php while ( have_posts() ) : the_post(); ?>
                <img src="<?php the_post_thumbnail_url(); ?>" >
                <h1><?php the_title();?></h1>
                <?php the_content();?>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                       comments_template();
                    endif;
                ?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <div class="clear"></div>    
    </div>
</div>

<?php do_action( 'vw_painter_pageleft_bottom' ); ?>

<?php get_footer(); ?>