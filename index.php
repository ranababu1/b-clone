<?php get_header(); ?>

<section class="content-area">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php clever_post_meta(); ?>
                        </header>
                        
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                            <?php clever_read_more_link(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="pagination">
                <?php the_posts_pagination([
                    'mid_size' => 2,
                    'prev_text' => __('Previous', 'clever'),
                    'next_text' => __('Next', 'clever')
                ]); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('No posts found.', 'clever'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>