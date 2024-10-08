<?php
/*
    Feature Boxes
*/

$per_row_class = '';
if(get_sub_field('feature_boxes_per_row')) { 
    $per_row_class = get_sub_field('feature_boxes_per_row');
}

$animate_class = '';
if(get_sub_field('feature_boxes_animate')) { 
    $animate_class = ' animate';
}
?>

<div class="thomson_feature_boxes_persona_wrapper">
    <?php
        while(have_rows('feature_boxes')) : the_row();

        $gf_id = '';
    ?>
        <article class="<?php echo $per_row_class ?>">

            <div class="thomson__feature__box__inner">

                <?php if(get_sub_field('feature_box_icon')): ?>
                    <div class="top_icon">
                        <i class="<?php the_sub_field('feature_box_icon'); ?>"></i>
                    </div>
                <?php endif; ?>
                
                <h3>
                    <?php if(get_sub_field('feature_box_button_url')): ?>
                        <a href="<?php the_sub_field('feature_box_button_url'); ?>" title="<?php the_sub_field('feature_box_heading'); ?>">
                            <?php endif; ?>
                            <?php the_sub_field('feature_box_heading'); ?>
                            <?php if(get_sub_field('feature_box_button_url')): ?>
                        </a>
                    <?php endif; ?>
                </h3>
                <?php the_sub_field('feature_box_content'); ?>

                <?php
                    if(get_sub_field('feature_box_button_url') || get_sub_field('feature_box_load_form')):

                    //$gf_id = ' data-gf-ajax-trigger data-gf-id="'.get_sub_field('feature_box_form_id').'"';
                ?>
                    <a href="<?php the_sub_field('feature_box_button_url'); ?>" class="fom"<?php echo $gf_id; ?>><?php the_sub_field('feature_box_button_label'); ?> <i class="ion-arrow-right-c"></i></a>
                <?php endif; ?>
            </div><!-- thomson__feature__box__inner -->
        </article>
    <?php endwhile; ?>
</div><!-- thomson_feature_boxes_wrapper -->
