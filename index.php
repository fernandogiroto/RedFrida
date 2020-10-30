<?php get_header(); ?>


<!-- Últimas Notícias -->
<section>
	<div class="container pb-5">
		<div class="row">
			<div class="col-12">
				<h1>Últimas Notícias</h1>
				<p class="pb-3">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries
					for
					previewing
					layouts and visual mockups.</p>
			</div>

			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
			?>
					<div class="col-4">
						<div class="card profile-card-2">
							<div class="card-img-block">
								<a href="<?php echo the_permalink(); ?>"> <img class="img-fluid" src="<?php echo the_post_thumbnail_url('full'); ?>" alt="Card image cap"></a>
							</div>
							<div class="card-body pt-5">
								<img src="http://localhost:8080/wordpress/wp-content/uploads/2020/10/fernando.jpg" alt="profile-image" class="profile" />
								<h5 class="card-title"><?php echo the_title(); ?> </h5>
								<p class="card-text"><?php echo the_content(); ?></p>
								<a href="<?php echo the_permalink(); ?>" class="btn btn-color">Go somewhere</a>
							</div>
						</div>
					</div>

			<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
	<?php get_footer(); ?>