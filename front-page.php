<?php
/*
	Home Page Template
*/
get_header();

echo do_shortcode('[smartslider3 slider="2"]');

the_content();
// thomson_content();

get_footer(); ?>
