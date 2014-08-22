<?php 
/*
	Template Name: Research
*/
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
	
		    		<?php
		    			$paper_query = new WP_Query( array('post_type' => 'papers', 'posts_per_page' => -1));
		    			
		    			if ( $paper_query->have_posts() ) :
		    		?>	
		    			<h2>Published Papers</h2>
						<ul class="paper-list">
							<?php 
								while ( $paper_query->have_posts() ) : $paper_query->the_post(); 
								
								$authors = types_render_field("p_authors", array('raw' => true));
								$journal = types_render_field("p_journal", array('raw' => true));
								$volume = types_render_field("p_volume", array('raw' => true));
								$issue = types_render_field("p_issue", array('raw' => true));
								$date = types_render_field("p_date", array('raw' => true));		
								$pages = types_render_field("p_pages", array('raw' => true));
								$pdf = types_render_field("p_pdf", array('raw' => true));
								$abstract = types_render_field("p_abstract", array('raw' => true));			
							?>
								<li class="paper">
									<p><?php echo $authors . ', "' . get_the_title() . '," <i>' . $journal . '</i> ' . $volume . '(' . $issue . '), ' . $date . ', ' . $pages . '.'; ?></p>
									<a href="<?php echo $pdf; ?>">View PDF</a> | <a class="view-abstract" href="#">View Abstract</a>
									<div class="abstract">
										<?php echo $abstract; ?>
									</div>
								</li>
							<?php endwhile; wp_reset_query(); ?>
		    			</ul>
					<?php endif; ?>
	
	 	        <?php the_content(); ?>
	
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>
	
	        	<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
	    	</section>
	
			<?php get_sidebar(); ?>

        <?php endwhile; ?>
    	</div>
    </article>

<?php get_footer(); ?>
