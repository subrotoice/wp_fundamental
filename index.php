<?php get_header(); ?>
		<section class="content_area">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row left_content_top">
							<div class="col-md-8 stricky-post">
								<?php echo do_shortcode( '[most_recent] ' ); ?>
							</div>
							<div class="col-md-4 left-side">
								<?php echo do_shortcode( '[sechond_post_start] ' ); ?>
							</div>
						</div>
						<div class="row">
							<?php echo do_shortcode( '[four_post_start] ' ); ?>
						</div>
					</div>
					<div class="col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<div class="row section3">
					<a href=""><h2>opinions et analyses de la rédaction</h2></a>
					<div class="col-md-4">
						<div class="articles">
							<img src="<?php echo get_template_directory_uri(); ?>/images/person1.jpg" alt="" />
							<h4>En tête</h4>
							<a href=""><h2>Le truc génial de Mirego pour booster la fierté de ses employés!</h2></a>
							<a href=""><p><span>28/26/16</span> | Stéphane Rolland</p></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="articles">
							<img src="<?php echo get_template_directory_uri(); ?>/images/person2.jpg" alt="" />
							<h4>En tête</h4>
							<a href=""><h2>Le truc génial de Mirego pour booster la fierté de ses employés!</h2></a>
							<a href=""><p><span>28/26/16</span> | Stéphane Rolland</p></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="articles">
							<img src="<?php echo get_template_directory_uri(); ?>/images/person3.jpg" alt="" />
							<h4>En tête</h4>
							<a href=""><h2>Le truc génial de Mirego pour booster la fierté de ses employés!</h2></a>
							<a href=""><p><span>28/26/16</span> | Stéphane Rolland</p></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="articles">
							<img src="<?php echo get_template_directory_uri(); ?>/images/person1.jpg" alt="" />
							<h4>En tête</h4>
							<a href=""><h2>Le truc génial de Mirego pour booster la fierté de ses employés!</h2></a>
							<a href=""><p><span>28/26/16</span> | Stéphane Rolland</p></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="articles">
							<img src="<?php echo get_template_directory_uri(); ?>/images/person2.jpg" alt="" />
							<h4>En tête</h4>
							<a href=""><h2>Le truc génial de Mirego pour booster la fierté de ses employés!</h2></a>
							<a href=""><p><span>28/26/16</span> | Stéphane Rolland</p></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="articles">
							<img src="<?php echo get_template_directory_uri(); ?>/images/person3.jpg" alt="" />
							<h4>En tête</h4>
							<a href=""><h2>Le truc génial de Mirego pour booster la fierté de ses employés!</h2></a>
							<a href=""><p><span>28/26/16</span> | Stéphane Rolland</p></a>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>