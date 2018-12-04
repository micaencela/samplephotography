<?php 
  $slug = get_post_field('post_name');
?>
	<!-- About -->
	<section class="about" id="<?php echo $slug ?>">
		<div class="about-content container content-margin content">
		<h1>About</h1>

		<div class="about-info">

		<?php the_content()?></div>

<div class="services content">

<h1>What We Can Do</h1>

    <div class="container">

      <div class="about-wrap content">
        <div class="row">
          
          <?php 
            $args = array('post_type' => 'service');
            $query = new WP_Query($args);
            while($query->have_posts()){

              $query->the_post();

              get_template_part('services/content','service');  

            }
            /* Restore original Post Data */
            wp_reset_postdata();

          ?>
        </div>
      </div>
		</div>
		</div>
	</section>