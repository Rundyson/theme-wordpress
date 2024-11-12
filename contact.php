<?php

/**
 * Template Name:Contact
 */

?>

<?php get_header(); ?>



    <div class="wrapper w-[800px] mx-auto pt-20">
        <h2 class="text-[25px] text-primary font-bold">Leave us a message</h2>
        <?php echo do_shortcode('[contact-form-7 id="e490f72" title="Contact form 1"]')?>
    </div>

<?php get_footer(); ?>