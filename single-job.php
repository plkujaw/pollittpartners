<?php

$post_title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
$post_url = urlencode(get_permalink());

$twitter_share_url = 'https://twitter.com/intent/tweet?text=' . $post_title . '&amp;url=' . $post_url;

$facebook_share_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url . '&t=' . $post_title;

$apply_link = get_field('job_apply_link');

get_header();
?>
<div class="post-top">
  <div class="container container--narrow lazy-load js-lazy-load">
    <h1 class="post-title font-size-h2"><?php the_title() ?></h1>
    <div class="post-meta">
      <div class="post-share">
        <ul>
          <li>
            <a href="<?php echo $facebook_share_url; ?>" target="_blank"><?php get_template_part('inc/template-parts/logo/logo', 'facebook.svg') ?>
            </a>
          </li>
          <li>
            <a href="<?php echo $twitter_share_url; ?>" target="_blank"><?php get_template_part('inc/template-parts/logo/logo', 'twitter.svg') ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <hr class="divider">
  </div>
</div>
<?php
the_content();
?>
<div class="post-foot">
  <div class="container">
    <div class="post-foot__inner">
      <?php if ($apply_link) { ?>
        <div class="post-foot__apply">
          <a class="btn btn--white" href="<?php echo esc_url($apply_link['url']) ?>" target="<?php echo $apply_link['target']; ?>"><strong><?php echo $apply_link['title']; ?></strong></a>
        </div>
      <?php } ?>
      <div class="post-foot__back">
        <a class="link-arrow link-arrow--left" href="<?php echo site_url('/join-us'); ?>"><?php get_template_part('inc/template-parts/icon/icon', 'arrow-left-2.svg'); ?><strong>Back to opportunities</strong></a>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
