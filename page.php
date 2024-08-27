<?php
/*
*   Default page template
*/

get_header();

global $post;

require_once('modules/advanced-video-banners/templates/avb-inner.php');

thomson_content();

get_footer();
?>
