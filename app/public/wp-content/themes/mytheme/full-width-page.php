<?php 
/*
 * Template Name: Full Width Page
 */
// "Full Width Page" and "full-width-page.php" is just made up custom name, 
// but the "File Header", Template Name, plays a role to make this page a template page
// Doing so, we see an option named "Full Width Page" inside Pages=>All Pages=>Template: drop down box.
// This is just an easy way to make Full size page removing side contents.
get_header(); 
while(have_posts()) : the_post();
?> 
<!-- Page Title -->   
<section id="page-title">
    <div class="container clearfix">
        <h1><?php the_title(); ?></h1>
        <?php if(function_exists('the_subtitle')) : ?>
            <span><?php the_subtitle(); ?></span>
        <?php endif; ?>
    </div> 
</section><!-- #page-title end -->
<?php
endwhile;
rewind_posts();
?>

<!-- Content -->
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
            <?php
            while(have_posts()) : 
                the_post();
                $author_ID = get_the_author_meta('ID');
                $author_url = get_author_posts_url($author_ID);
            ?>    
            <div class="single-post nobottommargin">
                <!-- Single Post -->
                <div class="entry clearfix">
                    <!-- Entry Image -->
                    <?php
                    if( has_post_thumbnail()) :
                        ?>
                        <div class="entry-image">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <?php 
                    endif;
                    ?><!-- .entry-image end -->

                    <!-- Entry Content -->
                    <div class="entry-content notopmargin">
                        <?php 
                        the_content();
                        // Create multiple pages for the post if we add <!-nextpage-> on the content of the post manually.
                        wp_link_pages( array(
                            'before'           => '<p class="text-center">' . __( 'Pages:', 'mytheme' ),
                            'after'            => '</p>'
                        )); 
                        ?>
                        <!-- Post Single - Content End -->

                        <!-- Tag Cloud -->
                        <div class="tagcloud clearfix bottommargin">
                            <?php the_tags('', ' ') ?>
                        </div><!-- .tagcloud end -->
                        <div class="clear"></div>
                    </div>
                </div><!-- .entry end -->

                    <!-- Comments -->
                <?php
                    if(comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                ?>
                <!-- #comments end -->
            </div>
            <?php
            endwhile;
            ?>
		</div>
	</div>

</section><!-- #content end -->

<?php get_footer(); ?>
