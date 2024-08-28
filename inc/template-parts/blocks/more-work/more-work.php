<?php

/**
 * Block Name: More Work
 *
 * This is the template that displays the More Work block.
 */

$allowed_blocks = array('acf/copy', 'acf/projects', 'acf/vertical-spacer');
$template = array(
  array('acf/projects'),
  array('acf/copy')
);
$colour = get_field('more_work_background_colour');
?>

<section class="more-work bg-<?php echo $colour ?>" <?php echo is_admin() ? "style='border: #adb2ad solid 1px;padding-top:20px;'" : '' ?>>
  <div class="container more-work__load lazy-load js-lazy-load"><button class="btn" style="display:block;background:transparent;border:0;outline:0;margin:0 auto;">Load More Work <span>+</span></button></div>
  <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)); ?>" />
</section>