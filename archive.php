<?php get_header(); ?>
		<section class="content_area">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="author_page">
							<h1>
							<?php if (have_posts()) : ?>
							<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
							<?php /* If this is a category archive */ if (is_category()) { ?>
							<?php _e('Archive for the'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category'); ?>
							<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
							<?php _e('Archive for the'); ?><?php single_tag_title(); ?> Tag
							<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<?php _e('Archive for'); ?><?php the_time('F jS, Y'); ?>
							<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<?php _e('Archive for'); ?><?php the_time('F, Y'); ?>
							<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<?php _e('Archive for'); ?><?php the_time('Y'); ?>
							<?php /* If this is a search */ } elseif (is_search()) { ?>
							<?php _e('Search Results'); ?>
							<?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<?php _e('Author Archive'); ?>
							<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<?php _e('Blog Archives'); ?>
							<?php } ?>
							</h1> 
							<?php get_template_part( 'post-loop' );?>
						</div>
					</div>
					<div class="col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>