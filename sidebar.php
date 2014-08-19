<?php if( is_active_sidebar('sidebar-1') ) { ?>
<aside role="complementary" class="secondary-content">
	<img class="profile-img" src="<?php echo bloginfo('template_directory'); ?>/assets/img/g_simon.png" alt="Simon Gervais" />
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
<?php } ?>