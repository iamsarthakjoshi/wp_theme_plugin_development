
<?php get_header(); ?>
<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
			<div>
				<div class="container clearfix">
					<span class="label label-danger bnews-title">Breaking News:</span>

					<div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
								<div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
								<div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container clearfix">

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin clearfix">

				<!-- Posts
				============================================= -->
				<div id="posts">

					<?php
					
					if(have_posts()) :
						while(have_posts()) : the_post();
					?>
						<div class="entry clearfix">
							<?php

							if( has_post_thumbnail()) :
								?>
								<div class="entry-image">
									<a href="<?php the_permalink(); ?>" data-lightbox="image">
									<?php the_post_thumbnail('full', array('class' => 'image_fade')); ?>
								</div>
								<?php 
							endif;

							?>
							
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
						<?php

						endwhile;
					endif;

					?>

				</div><!-- #posts end -->

				<!-- Pagination
									============================================= -->
				<ul class="pager nomargin">
					<li class="previous"><a href="#">&larr; Older</a></li>
					<li class="next"><a href="#">Newer &rarr;</a></li>
				</ul><!-- .pager end -->

			</div><!-- .postcontent end -->

			<!-- Sidebar 
			============================================= -->
			<?php get_sidebar(); ?>
			<!-- .sidebar end -->

		</div>

	</div>

</section><!-- #content end -->

<?php get_footer(); ?>
