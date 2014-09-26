<?php
/**
 * @package thebox
 * @since thebox 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta entry-time">
			<span class="entry-time-day"><?php the_time('j') ?></span>
			<span class="entry-time-month"><?php the_time('M') ?></span>
			<span class="entry-format-icon"></span>
		</div>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'thebox' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h2>		
	</header><!-- .entry-header -->

	<?php if ( is_home() || is_search() || is_archive() ) : // Only display Excerpts for Homepage and Search ?>

		<div class="entry-summary">
			
			<?php if ( get_post_format() ) : ?>

				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'thebox' ) ); ?>
						
  			<?php else : ?>
  			
  				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>
				<?php thebox_excerpt(40); ?>
				
			<?php endif; // End if get_post_format() ?>

		</div><!-- .entry-summary -->

	<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'thebox' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'thebox' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<p>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'thebox' ) );
				 if ( $categories_list && thebox_categorized_blog() ) :
			?>
			<span class="cat-links">
				<span class="icon-font icon-category-alt"></span>
				<?php printf( __( '%1$s', 'thebox' ), $categories_list ); ?>
			</span>
			<?php  endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'thebox' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"></span>
			<span class="tags-links">
				<span class="icon-font icon-tag-alt"></span>
				<?php printf( __( '%1$s', 'thebox' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="sep"></span>
		<span class="comments-link">
			<?php comments_popup_link( __( '<span class="icon-font icon-comment-alt"></span> Leave a comment', 'thebox' ), __( '<span class="icon-font icon-comment"></span> 1 Comment', 'thebox' ), __( '<span class="icon-font icon-comments-alt"></span> % Comments', 'thebox' ) ); ?>
		</span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'thebox' ), '<span class="sep"></span><span class="edit-link">', '</span>' ); ?>
		</p>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->



