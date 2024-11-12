<?php get_header(); ?>

<section class="post">
    <div class="container">

    <?php
        $args= array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            // 'offset' => 1,
        );
        $newQuery = new WP_Query($args);
     ?>

     <?php
        if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
    ?>

        <div class="wrapper w-[800px] mx-auto grid grid-cols-[_1fr_3fr] uppercase gap-2">
            <div>
                <div class="postInfo font-oswald font-semibold text-end py-6">
                    <p class="text-[25px]"><?php the_date() ?></p>
                    <p class="text-[22px] text-secondary">Leave a comment</p>
                    <p class="text-[16px]">Category</p>
                </div>
            </div>
            <div class="border-l border-primary px-3 py-6 ">
                <p class="postTitle uppercase text-primary font-oswald text-[25px] font-semibold mb-6">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title() ?>
                </a>
                </p>
                <div class="border-b border-primary border-dotted pb-4">
                    <?php the_excerpt() ?>
                </div>
            </div>
        </div>

        <?php
            endwhile;
            else :
                echo "no available content yet";
            endif;
            wp_reset_postdata();
        ?>
    </div>
</section>

<?php get_footer(); ?>