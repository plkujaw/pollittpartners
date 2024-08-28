<?php
$instagram = get_field('social_media_accounts', 'option')['instagram'];
$linkedin = get_field('social_media_accounts', 'option')['linkedin'];
$tel =  get_field('contact_telephone', 'option');
$email =  get_field('contact_email', 'option');
?>

<section class="mobile-menu">
  <div class="container">
    <?php wp_nav_menu(array(
      'theme_location' => 'primary-menu',
      'menu_class' => 'main-menu',
      'container' => 'nav',
    )); ?>
    <div class="menu-social">
      <ul>
        <li>
          <a class="link-arrow link-arrow--2" href="<?php echo esc_url($instagram['url']) ?>" target="<?php echo esc_attr($instagram['target']) ?>">
            <?php echo $instagram['title'];
            get_template_part('inc/template-parts/icon/icon', 'arrow-right-2.svg'); ?></a>
        </li>
        <li>
          <a class="link-arrow link-arrow--2" href="<?php echo esc_url($linkedin['url']) ?>" target="<?php echo esc_attr($linkedin['target']) ?>">
            <?php echo $linkedin['title'];
            get_template_part('inc/template-parts/icon/icon', 'arrow-right-2.svg') ?></a>
        </li>
      </ul>
    </div>
    <div class="menu-contact">
      <ul>
        <li>T <a href="tel:<?php echo get_number($tel); ?>"><?php echo $tel; ?></a></li>
        <li>E <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
      </ul>
    </div>
  </div>
</section>