<?php

/**
 * The template for displaying the footer
 *
 *
 */

$tel =  get_field('contact_telephone', 'option');
$email =  get_field('contact_email', 'option');
$address =  get_field('contact_address', 'option');
$social_accounts = get_field('social_media_accounts', 'option');
$footer_links = get_field('footer_links', 'option');

?>
</main>

<footer class="footer">
  <div class="container">
    <div class="footer__inner lazy-load js-lazy-load">
      <div class="footer__row">
        <div class="footer__contact">
          <ul>
            <li><a href="tel:<?php echo get_number($tel); ?>"><?php echo $tel; ?></a></li>
            <li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
          </ul>
        </div>
        <div class="footer__address">
          <address>
            <?php echo $address; ?>
          </address>
        </div>
        <div class="footer__menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'menu_class' => '',
            'container' => '',
          )); ?>
        </div>
        <div class="footer__social">
          <ul>
            <?php foreach ($social_accounts as $account) {
              if (!empty($account)) {
            ?>
                <li><strong><a href="<?php echo esc_url($account['url']); ?>"><?php echo $account['title']; ?></a></strong></li>
            <?php }
            } ?>
          </ul>
        </div>
      </div>
      <div class="footer__row">
        <div class="footer__logotype">
          <a href="<?php echo site_url() ?>" class="font-size-logotype">Pollitt<br>&<br>Partners</a>
        </div>
        <div class="footer__icon">
          <?php echo get_template_part('inc/template-parts/logo/logo-peo.svg') ?>
        </div>

        <div class="footer__credits">
          <ul class="links">
            <?php foreach ($footer_links as $link) {
              $link = $link['link'];
            ?>
              <li><a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo $link['title']; ?></a></li>
            <?php
            } ?>
          </ul>
          <p>© <?php echo date('Y'); ?> Pollitt & Partners Limited.<br>
            <?php the_field('footer_credits_copy', 'option') ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</div>
<!-- #site -->
</body>

</html>