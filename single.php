<?php get_header(); ?>
		<section class="content_area">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="single_post_content">
							<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							   <?php comments_template( '', true ); ?>  
							<?php endwhile; ?>
							<?php else : ?>
								<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>