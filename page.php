<?php get_header(); ?>

<article class="page-content">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>
            
            <div class="entry-content">
                <?php the_content(); ?>
                
                <?php wp_link_pages([
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'clever'),
                    'after' => '</div>',
                ]); ?>
            </div>
        <?php endwhile; ?>
    </div>
</article>

<?php get_footer(); ?>