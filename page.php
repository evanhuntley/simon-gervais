<?php 
	get_header(); 
	
	$banner_title = types_render_field("banner_title", array('raw' => true));
	$banner_content = types_render_field("banner_content", array('raw' => true));
		
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section class="banner">
		<div class="wrap">
			<?php if ( $banner_title ) : ?>
			<div class="intro">
				<h2 class="subtitle"><?php echo $banner_title; ?></h2>
				<p><?php echo $banner_content; ?></p>
			</div>
			<?php endif; ?>
		</div>
	</section>

    <article role="main" class="type-page" id="post-<?php the_ID(); ?>">    	
    	<div class="wrap">
    		
	    	<section class="primary">
		        <?php if ( is_front_page() ) { ?>
	            	<h1><?php the_title(); ?></h1>
				<?php } else { ?>
	            	<h1><?php the_title(); ?></h1>
				<?php } ?>
	
	 	        <?php the_content(); ?>
	
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>
	
	        	<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
	    	</section>
	
			<?php get_sidebar(); ?>

        <?php endwhile; ?>
    	</div>
    </article>

<?php get_footer(); ?>
