<?php 

/**
 * 
 * Template Name: About
 */

?>
<?php get_header(); ?>

<section class="about">
    <div class="container">
     <div class="wrapper w-[800px] mx-auto grid grid-cols-[_1fr_3fr] uppercase gap-2">
      <div>  </div>
        <div class="border-l border-primary px-3 py-6">
            <p class="postTitle uppercase text-primary font-oswald text-[25px] font-semibold mb-6">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title() ?>
                </a>
                </p>
            <div class="border-b border-primary border-dotted pb-4">
                <?php the_content() ?>
            </div>
        </div>
     </div>
    </div>
</section>


<?php get_footer(); ?>