<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>        

	<div class="single_post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post_info">
			Posted In: <?php the_category(', '); ?> | Posted on: <?php the_time('M d, Y') ?> <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?>
		</div>


		<div class="post_content">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?></a>
			<?php echo excerpt('60'); ?>
		</div>
	</div>

<?php endwhile; ?>    
<?php endif; ?>

<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts') ); ?></div>
<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>