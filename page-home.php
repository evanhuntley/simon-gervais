<?php
/*
	Template Name: Home Page
*/

	get_header(); 

	$hero_block = types_render_field("hero_block_1", array('format' => 'html'));
	$bio_title = types_render_field("bio_block_title", array('raw' => true));
	$bio_block_p1 = types_render_field("bio_block_p1", array('raw' => true));
	$bio_block_p2 = types_render_field("bio_block_p2", array('raw' => true));
	
	$bio_l1_link = types_render_field("bio_l1_link", array('raw' => true));
	$bio_l1_text = types_render_field("bio_l1_text", array('raw' => true));
	$bio_l2_link = types_render_field("bio_l2_link", array('raw' => true));
	$bio_l2_text = types_render_field("bio_l2_text", array('raw' => true));
	$bio_l3_link = types_render_field("bio_l3_link", array('raw' => true));
	$bio_l3_text = types_render_field("bio_l3_text", array('raw' => true));
	
	$linkedin_url = ot_get_option("linkedin_url");
	$twitter_url = ot_get_option("twitter_url");
	$mail_url = ot_get_option("mail_url");
	$resume_url = ot_get_option("resume_url");
?>

	<section class="hero banner">
		<div class="wrap">
			<div class="subtitle">Professor of Finance</div>
			<h1>Simon Gervais</h1>
			<p><?php echo $hero_block; ?></p>
			<ul class="social">
				<li><a class="icon-linkedin" href="<?php echo $linkedin_url; ?>">Linkedin</a></li>
				<li><a class="icon-twitter" href="<?php echo $twitter_url; ?>">Twitter</a></li>
				<li><a class="icon-email" href="<?php echo $mail_url; ?>">Mail</a></li>
			</ul>
		</div>
	</section>
	
    <section class="bio">
    	<div class="wrap">
			<img class="profile-img" src="<?php echo bloginfo('template_directory'); ?>/assets/img/g_simon.png" alt="Simon Gervais" />
			<ul class="bio-buttons">
				<li><a class="button" href="<?php echo $resume_url; ?>">My Resume</a></li>
				<li><a class="button" href="/research">My Research</a></li>
			</ul>
			<h1><?php echo $bio_title; ?></h1>
				<p><?php echo $bio_block_p1; ?></p>
				<p><?php echo $bio_block_p2; ?></p>
				<ul class="bio-links">
					<?php if ( $bio_l1_link && $bio_l1_text ) : ?>
						<li><a href="<?php echo $bio_l1_link; ?>"><?php echo $bio_l1_text; ?></a></li>
					<?php endif; ?>
					<?php if ( $bio_l2_link && $bio_l2_text ) : ?>
						<li><a href="<?php echo $bio_l2_link; ?>"><?php echo $bio_l2_text; ?></a></li>
					<?php endif; ?>
					<?php if ( $bio_l3_link && $bio_l3_text ) : ?>
						<li><a href="<?php echo $bio_l3_link; ?>"><?php echo $bio_l3_text; ?></a></li>
					<?php endif; ?>
				</ul>
    	</div>
    </section>
    
    <section class="papers">
    	<div class="wrap">
    		<h1>Published Papers</h1>
    		<?php
    			$paper_query = new WP_Query( array('post_type' => 'papers', 'posts_per_page' => 3, 'meta_key' => 'wpcf-show_paper', 'meta-value' => 'show'));
    			
    			if ( $paper_query->have_posts() ) :
    		?>
	    	<ul>
	    		<?php while ( $paper_query->have_posts() ) : $paper_query->the_post(); ?>
	    		<li>
	    			<h3><a href="#"><?php the_title(); ?></a></h3>
	    			<p><?php the_excerpt(); ?></p>
	    		</li>
				<?php endwhile; ?>
	    	</ul>
	    	<?php endif; wp_reset_query(); ?>
	    	<a class="button" href="/research">View More</a>
    	</div>
    </section>

<?php get_footer(); ?>
