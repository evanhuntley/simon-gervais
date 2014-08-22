<?php

	$linkedin_url = ot_get_option("linkedin_url");
	$twitter_url = ot_get_option("twitter_url");
	$mail_url = ot_get_option("mail_url");

?>

<aside role="complementary" class="secondary-content">
	<img class="profile-img" src="<?php echo bloginfo('template_directory'); ?>/assets/img/g_simon.png" alt="Simon Gervais" />
	<ul class="social">
		<li><a class="icon-linkedin-color" href="<?php echo $linkedin_url; ?>"></a></li>
		<li><a class="icon-twitter-color" href="<?php echo $twitter_url; ?>"></a></li>
		<li><a class="icon-email-color" href="<?php echo $mail_url; ?>"></a></li>
	</ul>
	<?php 
		global $post;
	 
	    if($post->post_parent) {
			echo do_shortcode('[siblings class="links"]'); 
	    } else {
			echo do_shortcode('[subpages class="links"]'); 
	    }
	?>
</aside>