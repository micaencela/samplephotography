<?php 
  $slug = get_post_field('post_name');
?>

<!-- Home -->
	<section class="home" id="<?php echo $slug ?>">
		<div class="home-content container">
		<h1>Welcome</h1>
		<p>This is the home page.</p>
		<img src="<?php the_field('hero_image') ?>" alt="" class="hero-image container">
		</div>
	</section>