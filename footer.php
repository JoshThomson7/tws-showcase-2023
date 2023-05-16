<?php
    $logo = get_field('logo', 'options');

    $phone = get_field('contact_phone', 'options'); 
    $email = get_field('contact_email', 'options');

    $address = get_field('contact_address', 'options'); 
    $address_link = get_field('contact_address_link', 'options');

    $column1 = get_field('hide_column_1', 'options');
    $column2 = get_field('hide_column_2', 'options'); 
    $column3 = get_field('hide_column_3', 'options'); 
    $column4 = get_field('hide_column_4', 'options');
    
    if($column1){
        $column_hide = 'style="display: none;"';
    }

    if($column2){
        $column_hide2 = 'style="display: none;"';
    }

    if($column3){
        $column_hide3 = 'style="display: none;"';
    }

    if($column4){
        $column_hide4 = 'style="display: none;"';
    }
?>

<footer role="contentinfo">
        
    <div class="footer__menus">
        <div class="max__width">

            <?php while(have_rows('footer_menus', 'options')) : the_row();

                    $footer_menu = get_sub_field('footer_menu');
                    ?>
                    <article class="footer__menu" <?php echo $column_hide; ?>>
                        <h5><?php echo $footer_menu->name; ?> <span class="ion-ios-plus-empty"></span></h5>

                        <?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false, 'walker' => new clean_walker)); ?>
                    </article>

            <?php endwhile; ?>

            <article class="footer__menu contact-info" <?php echo $column_hide2; ?>>
                <h5>Contact Us <span class="ion-ios-plus-empty"></span></h5>

                <ul>
                    <li><i class="fa fa-phone"></i><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                </ul>
            </article>

            <article class="footer__menu find-us" <?php echo $column_hide3; ?>>
                <h5>Find Us</h5>

                <div class="contact">
                    <a href="<?php echo $address_link; ?>" target="_blank">
                        <?php echo $address; ?>
                    </a>
                </div>
            </article>

            <article class="footer__menu social" <?php echo $column_hide4; ?>>
                <h5>Follow Us <span class="ion-ios-plus-empty"></span></h5>
                <?php if(get_field('header_social', 'options')): ?>
                    <ul class="social-wrapper">
                        <?php while(have_rows('header_social', 'options')) : the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('header_social_url'); ?>" title="<?php the_sub_field('header_social_platform'); ?>" target="_blank">
                                    <i class="<?php the_sub_field('header_social_icon'); ?>"></i>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul><!-- header__social -->

                <?php endif; ?>

            </article>

        </div><!-- max__width -->

    </div><!-- footer__menus -->

    <div class="subfooter">
        <div class="subfooter__credits">
            <img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>">
            <p>&copy;<?php bloginfo('name') ?> <?php echo date("Y"); ?></p>
            <p class="credit"><a href="https://thomson-website-solutions.com/" target="_blank">Website by Thomson Website Solutions</a></p>
        </div><!-- subfooter__credits -->
    </div><!-- subfooter -->
        
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
