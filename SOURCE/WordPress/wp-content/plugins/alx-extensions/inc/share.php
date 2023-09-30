<?php
/* load template */
function alx_ext_sharrre_actions() {
	add_action( 'alx_ext_sharrre', 'alx_ext_sharrre_template' );
}
add_action( 'plugins_loaded', 'alx_ext_sharrre_actions' );

/* template */
function alx_ext_sharrre_template() {

	$enable_social_share = get_theme_mod( 'enable-social-share', true );
	if ( true !== $enable_social_share ) {
		return;
	}
	?>

	<div class="sharrre-container sharrre-header group">
		<span><?php esc_html_e('Share','alx'); ?></span>
		<div id="twitter" class="sharrre">
			<a class="box group" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>" title="<?php esc_attr_e('Share on X', 'alx'); ?>">
				<div class="count"><i class="fas fa-plus"></i></div><div class="share"><i class="fab fa-x-twitter"></i></div>
			</a>
		</div>
		<div id="facebook" class="sharrre">
			<a class="box group" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="<?php esc_attr_e('Share on Facebook', 'alx'); ?>">
				<div class="count"><i class="fas fa-plus"></i></div><div class="share"><i class="fab fa-facebook-square"></i></div>
			</a>
		</div>
		<div id="pinterest" class="sharrre">
			<a class="box group" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=&description=<?php the_title_attribute(); ?>" title="<?php esc_attr_e('Share on Pinterest', 'alx'); ?>">
				<div class="count"><i class="fas fa-plus"></i></div><div class="share"><i class="fab fa-pinterest"></i></div>
			</a>
		</div>
		<div id="linkedin" class="sharrre">
			<a class="box group" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" title="<?php esc_attr_e('Share on LinkedIn', 'alx'); ?>">
				<div class="count"><i class="fas fa-plus"></i></div><div class="share"><i class="fab fa-linkedin"></i></div>
			</a>
		</div>
	</div><!--/.sharrre-container-->
	
	<?php
}
