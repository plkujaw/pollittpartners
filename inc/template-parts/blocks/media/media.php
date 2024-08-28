<?php

/**
 * Block Name: Media
 *
 * This is the template that displays the Media block.
 */

$columns = get_field('media_columns');

?>
<?php if (!empty($columns)) { ?>
  <section class="media">
    <?php echo count($columns) > 1 ? "<div class='container lazy-load js-lazy-load'>" : '' ?>
    <div class="media__inner col-<?php echo count($columns) ?>">
      <?php foreach ($columns as $column) {
        $media_type = $column['media_type'];
        $image = $column['media_image'];
        $video = $column['media_video'];
        $offset = $column['media_offset'];
        $center = $column['media_center'];

        if ($center) {
          $center = 'center';
        } else {
          $center = '';
        }

        if ($offset && (array_search($column, $columns) === 0)) {
          $offset = 'offset-right';
        } elseif ($offset && (array_search($column, $columns) === 1)) {
          $offset = 'offset-left';
        } else {
          $offset = '';
        }

      ?>
        <div class="media__col <?php echo $offset . $center; ?> lazy-load js-lazy-load">
          <?php if ($media_type == 'image') {
            if (count($columns) === 1) {
              $src = wp_get_attachment_image_src($image, 'full')[0];
              echo "<img src=$src loading='lazy'>";
            } else {
              echo wp_get_attachment_image($image, 'full');
            }
          } else { ?>
            <video autoplay muted loop playsinline defaultMuted>
              <source src="<?php echo esc_url($video['url']) ?>" type="<?php echo $video['mime_type'] ?>">
            </video>
          <?php } ?>
        </div>
      <?php }
      ?>
    </div>
  </section>
<?php } ?>