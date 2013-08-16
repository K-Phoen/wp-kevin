<?php
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()): ?>
		<h2 class="comments-title">
			<?php
				printf(_nx('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'wp_kevin'),
					number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
			?>
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments(array(
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 60,
				));
			?>
		</ul><!-- .comment-list -->

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
