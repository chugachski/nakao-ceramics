<div class="footer-content">
    <div class="footer-left">
      <img src="https://www.fillmurray.com/300/100" alt="Logo">
    </div>

    <div class="footer-right">
      <div class="footer-contact">
          <div class="footer-title">Contact</div>
          <ul>
              <li><?php echo get_option( 'street_address' ); ?></li>
              <li><?php echo get_option( 'city_state_zip' ); ?></li>
              <li><?php echo get_option( 'phone' ); ?></li>
              <li>©<?php echo date('Y'); ?> Jenny Nakao</li>
          </ul>
      </div>

      <div class="footer-social" id="footer-bottom">
          <div class="footer-title">Connect</div>
          <?php
              if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
                  get_template_part( 'includes/social_icons', 'footer' );
              }
          ?>
      </div>
    </div> <!-- footer-right -->
</div> <!-- footer-content -->
