		<section class="footer_area">
			<div class="footer_top">
				<div class="container">
					<div class="row footer_top-fst">
						<div class="col-md-2">
							<h2>NOS PUBLICATIONS</h2>
						</div>
						<div class="col-md-5">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book_img.jpg" alt="" />
							<h3>Les Affaires</h3>
							<p>Votre meilleur allié pour faire grandir votre entreprise, votre carrière et votre portefeuille. Économisez 75% sur le prix en kiosque !</p>
							<button type="button" class="btn btn-danger">Abonnez-vous</button>
							<p><a href="">La dernière publication</a></p>
						</div>
						<div class="col-md-5">
							<img src="<?php echo get_template_directory_uri(); ?>/images/book_img.jpg" alt="" />
							<h3>Les Affaires</h3>
							<p>Votre meilleur allié pour faire grandir votre entreprise, votre carrière et votre portefeuille. Économisez 75% sur le prix en kiosque !</p>
							<button type="button" class="btn btn-danger">Abonnez-vous</button>
							<p><a href="">La dernière publication</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<h2>NOS PUBLICATIONS</h2>
						</div>
						<div class="col-md-10">
							<i class="fa fa-envelope"></i>
							<h3>Les Affaires</h3>
							<p>Votre meilleur allié pour faire grandir votre entreprise, votre carrière et votre portefeuille. Économisez 75% sur le prix en kiosque !</p>
							<button type="button" class="btn btn-danger">Abonnez-vous</button>
							<p><a href="">La dernière publication</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bottom">
				<div class="container">
					<div class="row text-center footer_top-fst">
						<div class="col-md-4">
							<?php if(cs_get_option( 'top-banner' )): ?>
								<?php $image_id = cs_get_option( 'top-banner' );$attachment = wp_get_attachment_image_src( $image_id, 'full' );echo '<img src="'.$attachment[0].'" alt="" />';?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/fi.png" alt="" />
							<?php endif; ?>
						</div>
						<div class="col-md-4">
							<?php if(cs_get_option( 'top-banner' )): ?>
								<?php $image_id = cs_get_option( 'top-banner' );$attachment = wp_get_attachment_image_src( $image_id, 'full' );echo '<img src="'.$attachment[0].'" alt="" />';?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/fi.png" alt="" />
							<?php endif; ?>
						</div>
						<div class="col-md-4">
							<?php if(cs_get_option( 'top-banner' )): ?>
								<?php $image_id = cs_get_option( 'top-banner' );$attachment = wp_get_attachment_image_src( $image_id, 'full' );echo '<img src="'.$attachment[0].'" alt="" />';?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/fi.png" alt="" />
							<?php endif; ?>
						</div>
					</div>
					<div class="row">
						<?php dynamic_sidebar('footer_one'); ?>
						<?php dynamic_sidebar('footer_two'); ?>
						<?php dynamic_sidebar('footer_three'); ?>
					</div>
					<div class="row  text-center">
						<div class="col-md-12">
							<?php if(cs_get_option( 'top-banner' )): ?>
								<?php $image_id = cs_get_option( 'top-banner' );$attachment = wp_get_attachment_image_src( $image_id, 'full' );echo '<img src="'.$attachment[0].'" alt="" />';?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/footer_logos.png" alt="" />
							<?php endif; ?>
							
						</div>
					</div>
					<div class="row text-center">
						<div class="col-md-12">
							<p><?php echo cs_get_option( 'Copyright_text' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php wp_footer()?>
    </body>
</html>