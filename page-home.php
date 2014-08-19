<?php
/*
	Template Name: Home Page
*/

	get_header(); 

	$hero_block = types_render_field("hero_block_1", array('raw' => true));


?>

	<section class="hero banner">
		<div class="subtitle">Professor of Finance</div>
		<h1>Simon Gervais</h1>
		<p><?php echo $hero_block; ?></p>
		<ul class="social">
			<li><a href="#"><i class="icon-linkedin"></i></a></li>
			<li><a href="#"><i class="icon-twitter"></i></a></li>
			<li><a href="#"><i class="icon-mail"></i></a></li>
		</ul>
	</section>
	
    <section class="bio">
    	<div class="wrap">
			<img class="profile-img" src="<?php echo bloginfo('template_directory'); ?>/assets/img/g_simon.png" alt="Simon Gervais" />
			<ul class="bio-buttons">
				<li><a class="button" href="#">My Resume</a></li>
				<li><a class="button" href="/research">My Research</a></li>
			</ul>
			<h1>More About Me</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu ante ipsum. Nunc purus nisi, ultrices ac massa sit amet, euismod vestibulum mauris. Aliquam vestibulum a massa ut porttitor. Nullam cursus lacus enim, vel faucibus magna sodales vel. Pellentesque vel sem sed sapien semper varius. Suspendisse mi risus, hendrerit non massa vitae, consectetur viverra sem. Ut in facilisis augue, vel placerat velit. Vestibulum egestas justo erat, a vulputate leo elementum ac. Suspendisse sit amet suscipit felis.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu ante ipsum. Nunc purus nisi, ultrices ac massa sit amet, euismod vestibulum mauris. Aliquam vestibulum a massa ut porttitor. Nullam cursus lacus enim, vel faucibus magna sodales vel. Pellentesque vel sem sed sapien semper varius. Suspendisse mi risus, hendrerit non massa vitae, consectetur viverra sem. Ut in facilisis augue, vel placerat velit. Vestibulum egestas justo erat, a vulputate leo elementum ac. Suspendisse sit amet suscipit felis.</p>
    	</div>
    </section>
    
    <section class="papers">
    	<div class="wrap">
    		<h1>Published Papers</h1>
	    	<ul>
	    		<li>
	    			<h3><a href="#">Title of Paper</a></h3>
	    			<p>Proin gravida  auctor aliquet. Aenean sollici udin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
	    		</li>
	    		<li>
	    			<h3><a href="#">Title of Paper</a></h3>
	    			<p>Proin gravida  auctor aliquet. Aenean sollici udin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
	    		</li>
	    		<li>
	    			<h3><a href="#">Title of Paper</a></h3>
	    			<p>Proin gravida  auctor aliquet. Aenean sollici udin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
	    		</li>
	    	</ul>
	    	<a class="button" href="/research">View More</a>
    	</div>
    </section>

<?php get_footer(); ?>
