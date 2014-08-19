<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section class="banner">
		<div class="wrap">
			<h2 class="subtitle">Teaching is my passion</h2>
			<p>Teaching to me is like roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellu.</p>
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
