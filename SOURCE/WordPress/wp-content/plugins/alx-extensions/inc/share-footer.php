<?php
/* load template */
function alx_ext_sharrre_footer_actions() {
	add_action( 'alx_ext_sharrre_footer', 'alx_ext_sharrre_footer_template' );
}
add_action( 'plugins_loaded', 'alx_ext_sharrre_footer_actions' );

/* template */
function alx_ext_sharrre_footer_template() {

	$enable_social_share = get_theme_mod( 'enable-social-share', true );
	if ( true !== $enable_social_share ) {
		return;
	}
	?>
	
	<div class="sharrre-footer group">
		<div id="facebook-footer" class="sharrre">
			<a class="box group" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
				<div class="share"><i class="fab fa-facebook-square"></i><?php esc_html_e('Share', 'alx'); ?> <span><?php esc_html_e('on Facebook', 'alx'); ?></span><div class="count" href="#"><i class="fas fa-plus"></i></div></div>
			</a>
		</div>
		<div id="twitter-footer" class="sharrre">
			<a class="box group" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>">
				<div class="share"><i class="fab fa-x-twitter"></i><?php esc_html_e('Share', 'alx'); ?> <span><?php esc_html_e('on X', 'alx'); ?></span><div class="count" href="#"><i class="fas fa-plus"></i></div></div>
			</a>
		</div>
	</div><!--/.sharrre-footer-->

	<?php
}
