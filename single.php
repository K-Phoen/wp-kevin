<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="twelve columns" itemscope itemtype="http://schema.org/BlogPosting">
        <header>
            <h1 itemprop="headline"><?php the_title(); ?></h1>
            <div class="postdetails">Posté le <strong itemprop="datePublished" datetime="<?php the_time('c'); ?>"><?php the_date(); ?></strong> par <strong><?php the_author(); ?></strong>.</div>
            <meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>" />
        </header>

        <div itemprop="articleBody"><?php the_content(); ?></div>
    </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
