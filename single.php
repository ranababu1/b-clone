<?php get_header(); ?>

<article class="single-post">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php clever_post_meta(); ?>
            </header>
            
            <div class="entry-content">
                <?php the_content(); ?>
                
                <?php wp_link_pages([
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'clever'),
                    'after' => '</div>',
                ]); ?>
            </div>
            
            <footer class="entry-footer">
                <?php if (has_tag()) : ?>
                    <div class="post-tags">
                        <?php the_tags('<span class="tags-label">' . __('Tags:', 'clever') . '</span> ', ', ', ''); ?>
                    </div>
                <?php endif; ?>
            </footer>
            
            <?php 
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
            
        <?php endwhile; ?>
    </div>
</article>

<?php get_footer(); ?>