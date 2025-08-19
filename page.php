<?php get_header(); ?>

<article class="page-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php the_title(); ?>
                </h1>
            </header>
            
            <div class="entry-content">
                <?php the_content(); ?>
                
                <?php wp_link_pages([
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'clever'),
                    'after' => '</div>',
                ]); ?>
            </div>
        <?php endwhile; else : ?>
            <p><?php esc_html_e('Sorry, no content found.', 'clever'); ?></p>
        <?php endif; ?>
    </div>
</article>

<?php get_footer(); ?>