<?php
get_header();
$position = get_field('person_position');
$social = get_field('person_social_media');
$bio = get_field('person_bio');
?>

<div class="container lazy-load js-lazy-load">
  <div class="single-person__wrapper">
    <section class="person-intro">
      <h1 class="font-size-h2"><?php the_title(); ?></h1>
      <div class="person-meta font-size-small">
        <h3><?php echo $position; ?></h3>
        <?php if ($social) {
          echo '<ul>';
          foreach ($social as $account) {
            $account  = $account['account'];
            if (!empty($account)) {
              echo "<li><a href=" . esc_url($account['url']) . " target=" . $account['target'] . ">" . $account['title'] . "</a></li>";
            }
          }
        } ?>
      </div>
    </section>
    <section class="person-content">
      <picture class="person-image">
        <?php the_post_thumbnail('entry'); ?>
      </picture>
      <article class="person-bio wysiwyg">
        <?php echo $bio; ?>
      </article>
      <div class="single-person__foot">
        <a class="link-arrow link-arrow--left" href="<?php echo site_url('/about-us'); ?>"><?php get_template_part('inc/template-parts/icon/icon', 'arrow-left-2.svg'); ?><strong>Back</strong></a>
      </div>
    </section>
  </div>

</div>
<?php
get_footer();
