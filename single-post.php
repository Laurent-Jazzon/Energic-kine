<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="text-5xl mb-3"><?php the_title() ?></h1>
        <?php the_post_thumbnail('large', ['class' => 'w-1/2 mb-5', 'alt' => 'clock']) ?>
        <?php the_content() ?>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>