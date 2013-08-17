<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="twelve columns" itemscope itemtype="http://schema.org/BlogPosting">
        <header>
            <h1 itemprop="headline"><?php the_title(); ?></h1>
            <div class="postdetails"><?php wp_kevin_entry_meta(); ?></div>
            <meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>" />
        </header>

        <div itemprop="articleBody"><?php the_content(); ?></div>
        <?php comments_template('/comments.php'); ?>
    </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
