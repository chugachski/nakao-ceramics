<ul class="et-social-icons">

<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-facebook">
		<a href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>" class="icon">
			<span><?php esc_html_e( 'Facebook', 'Divi' ); ?></span>
      <div class="social-path">/nakao.ceramics</div>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-twitter">
		<a href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>" class="icon">
			<span><?php esc_html_e( 'Twitter', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_google_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-google-plus">
		<a href="<?php echo esc_url( et_get_option( 'divi_google_url', '#' ) ); ?>" class="icon">
			<span><?php esc_html_e( 'Google', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_rss_icon', 'on' ) ) : ?>
<?php
	$et_rss_url = '' !== et_get_option( 'divi_rss_url' )
		? et_get_option( 'divi_rss_url' )
		: get_bloginfo( 'rss2_url' );
?>
	<li class="et-social-icon et-social-rss">
		<a href="<?php echo esc_url( $et_rss_url ); ?>" class="icon">
			<span><?php esc_html_e( 'RSS', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>

<li class="et-social-icon et-social-instagram">
  <a href="https://www.instagram.com/jennynakao/" class="icon">
    <span><?php esc_html_e( 'Instagram', 'Divi' ); ?></span>
    <div class="social-path">/jennynakao/</div>
  </a>
</li>

<li class="et-social-icon et-social-etsy">
  <div class="etsy-container">
    <div class="image-static">
      <a href="https://www.etsy.com/people/jennynakao" class="icon">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/etsy.svg" />
        <div class="social-path">/jennynakao/</div>
      </a>
    </div>
    <div class="image-hover">
      <a href="https://www.etsy.com/people/jennynakao" class="icon">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/etsy-blue.svg" />
        <div class="social-path">/jennynakao/</div>
      </a>
    </div>
  </div>
</li>

</ul>
