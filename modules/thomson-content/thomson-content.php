<?php
/*
*   Thomson Content
*
*   Includes files for different content types
*/


// $image_bg = '';
// if(get_field('image_bg')) {
//     $image_bg = 'style="background-image: url('. get_field('image_bg') .')"';
// }

// echo '<div '. $image_bg .' class="thomson__content">';
// //thomson__content give it css properties

// Tabs scrollbar
if(get_field('thomson_scroller')) {
    require('templates/_thomson-scrollbar.php');
}

if(have_rows('thomson_content_modules')):

    $row_count = 1;

    echo '<div class="thomson__content">';

    while(have_rows('thomson_content_modules')) : the_row();

        // open section - see thomson-functions.php
        $open = fc_field_section(get_row_layout(), 'open');

        if(!$open['skip_open']) {
            echo $open['html'];
        }

        if(get_row_layout() === 'thomson_accordion'):

            // Accordion
            require('templates/thomson-accordion.php');

        elseif(get_row_layout() === 'thomson_buttons'):

            // Button
            require('templates/thomson-buttons.php');

        elseif(get_row_layout() === 'thomson_cta'):

            // Call to action
            require('templates/thomson-call-to-action.php');

        elseif(get_row_layout() === 'thomson_carousel_images'):

            // Carousel
            require('templates/thomson-carousel.php');

        elseif(get_row_layout() === 'thomson_contact'):

            // Contact
            require('templates/thomson-contact.php');

        elseif(get_row_layout() === 'thomson_feature'):

            // Feature
            require('templates/thomson-feature.php');

        elseif(get_row_layout() === 'thomson_feature_boxes'):

            // Feature Boxes
            require('templates/thomson-feature-boxes.php');

        elseif(get_row_layout() === 'thomson_feature_boxes_persona'):

            // Feature Boxes Persona
            require('templates/thomson-feature-boxes-persona.php');

        elseif(get_row_layout() === 'thomson_text'):

            // Free Text
            require('templates/thomson-text.php');

        elseif(get_row_layout() === 'thomson_gallery'):

            // Gallery
            require('templates/thomson-gallery.php');

        elseif(get_row_layout() === 'thomson_grid_boxes'):

            // Grid Boxes
            require('templates/thomson-grid-boxes.php');

        elseif(get_row_layout() === 'thomson_icon_grid'):

            // Grid icons
            require('templates/thomson-grid-icons.php');

        elseif(get_row_layout() === 'thomson_grid_links'):

            // Grid links
            require('templates/thomson-grid-links.php');

        elseif(get_row_layout() === 'thomson_masonry'):

            // Masonry
            require('templates/thomson-masonry.php');

        elseif(get_row_layout() === 'thomson_tabs'):

            // Tabs
            require('templates/thomson-tabs.php');

        elseif(get_row_layout() === 'thomson_table'):

            // Table
            require('templates/thomson-table.php');

        elseif(get_row_layout() === 'thomson_timeline'):

            // Timeline
            require('templates/thomson-timeline.php');

        elseif(get_row_layout() === 'thomson_team'):

            // Team (Custom)
            require('templates/thomson-team.php');

        elseif(get_row_layout() === 'thomson_team_full'):

            // Team (Full)
            require('templates/thomson-team-full.php');

        elseif(get_row_layout() === 'thomson_testimonials'):

            // Testimonials
            require('templates/thomson-testimonials.php');

        elseif(get_row_layout() === 'thomson_video'):

            // Video
            require('templates/thomson-video.php');
            
        elseif(get_row_layout() === 'thomson_circle_masonry'):

            // Masonry Circles
            require('templates/thomson-masonry-circles.php');

        elseif(get_row_layout() === 'thomson_featured_testimonials'):

            // Featured Testimonials
            require('templates/thomson-featured-testimonials.php');
        
        endif;

        // close section - see thomson-functions.php
        $close = fc_field_section(get_row_layout(), 'close');

        if(!$close['skip_close']) {
            echo $close['html'];
        }

    $row_count++; endwhile;

    echo '</div><!-- thomson__content -->';

endif;
?>
