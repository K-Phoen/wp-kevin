<?php if (have_posts()) : ?>
<div id="posts">
  <?php while (have_posts()) : the_post(); ?>
    <article class="twelve columns" itemscope itemtype="http://schema.org/BlogPosting">
        <header>
            <h2 itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="postdetails">
                <ul>
                    <li><i class="icon-time"></i> <meta itemprop="datePublished" content="<?php the_time('c'); ?>" /><?php echo get_the_date(); ?> <span>/</span></li>
                    <li><i class="icon-user"></i> <?php the_author(); ?> <span>/</span></li>
                    <li><i class="icon-folder-open"></i> <?php the_category(', '); ?> <span>/</span></li>
                    <li><i class="icon-comments"></i> <a href="<?php comments_link(); ?>"><?php comments_number('Aucun commentaire', 'Un commentaire', '%s commentaires'); ?></a></li>
                </ul>
            </div>
            <meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>" />
        </header>

        <?php the_excerpt('Lire la suite →'); ?>
    </article>
  <?php endwhile; ?>
    <div class="six columns">
        <?php next_posts_link("« Entrées plus anciennes"); ?>
    </div>
    <div class="six columns next">
        <?php previous_posts_link("Entrées plus récentes »"); ?>
    </div>
</div>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>
