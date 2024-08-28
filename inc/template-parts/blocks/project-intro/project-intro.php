<?php

/**
 * Block Name: Project Intro
 *
 * This is the template that displays the Project Intro block.
 */

$cats = get_the_terms(get_the_ID(), 'project_category');
$intro_text = get_field('project_intro_text');
$more_text =  get_field('project_intro_more_text');
$additional_text =  get_field('project_intro_additional_text');
$additional_text_caption =  get_field('project_intro_additional_text_caption');
$additional_info =  get_field('project_intro_additional_info');

?>

<section class="project-intro bg-black">
  <div class="container lazy-load js-lazy-load">
    <div class="project-intro__main">
      <div class="intro-title">
        <h1><?php the_title() ?></h1>
      </div>
      <div class="intro-text">
        <p class="font-size-h3"><?php echo $intro_text; ?></p>
        <div class="intro-meta">
          <p><strong>We partnered on</strong></p>
          <ul>
            <?php if ($cats) {
              foreach ($cats as $cat) {
            ?>
                <li><?php echo $cat->name; ?></li>
            <?php }
            } ?>

          </ul>
        </div>
      </div>
    </div>
    <div class="project-intro__more accordion js-accordion">
      <button class="btn btn--white btn--underline accordion__btn js-accordion-btn" data-text="Read">Read More +</button>
      <div class="more-inner accordion__panel js-accordion-panel">
        <article class="more-text wysiwyg font-size-regular"><?php echo $more_text; ?></article>
        <div class="more-additional-info">
          <article class="font-size-h3">
            <?php echo $additional_text; ?>
            <?php if ($additional_text_caption) { ?>
              <span class="additional-text-caption font-size-title">
                <?php echo $additional_text_caption; ?>
              </span>
            <?php } ?>
          </article>
          <?php if ($additional_info) { ?>
            <ul>
              <?php foreach ($additional_info as $item) {
              ?>
                <li>
                  <span class="font-size-xlarge font-size-xlarge--thin"><?php echo $item['title']; ?></span>
                  <span class="font-size-regular"><?php echo $item['description']; ?></span>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>