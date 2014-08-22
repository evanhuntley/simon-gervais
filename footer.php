<footer role="contentinfo">
	<div class="wrap">
        <nav role="navigation">
            <?php
                $args = array(
                    'container' => 'false',
                    'items_wrap' => '<ul>%3$s</ul>',
                    );
                wp_nav_menu($args);
            ?>
        </nav>
        <a class="button" href="#">Contact Me</a>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- Scripts -->
    <!--
    Please be sure you need jQuery for your project, if you don't, remove it
    If lt IE9 support is needed, use jQuery 1.x.x, v2 doesn't support it -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery-2.0.3.min.js"%3E%3C/script%3E'))</script>
    <script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/scripts.min.js"></script>

<!-- Scripts -->

<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
</body>
</html>