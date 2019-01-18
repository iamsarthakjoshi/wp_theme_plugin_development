<div class="entry clearfix">
    <?php
    if( has_post_thumbnail()) : ?>
        <div class="entry-image">
            <a href="<?php the_permalink(); ?>" data-lightbox="image">
            <?php the_post_thumbnail('full', array('class' => 'image_fade')); ?>
        </div>
    <?php endif; ?>
    
    <div class="entry-title">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <ul class="entry-meta clearfix">
        <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
        <li><a href="<?php get_author_posts_url( get_the_author_meta('ID')); ?>"><i class="icon-user"></i> <?php the_author(); ?></a></li>
        <li><i class="icon-folder-open"></i> <?php the_category(' '); ?></li>
        <li><a href="<?php the_permalink(); ?>#comments"><i class="icon-comments"></i> <?php echo comments_number('0'); ?> Comments</a></li>
    </ul>
    <div class="entry-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
        <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
    </div>
</div>