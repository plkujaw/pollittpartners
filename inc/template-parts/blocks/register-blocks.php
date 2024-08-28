<?php

register_block_type(get_template_directory() . '/inc/template-parts/blocks/accordion/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/additional-info/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/copy/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/hero-cover/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/image-scroll/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/info-grid/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/links-blocks/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/logo-grid/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/map/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/media/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/media-carousel/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/more-work/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/people-carousel/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/posts-loop/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/project-intro/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/projects/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/selected-clients/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/services-list/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/text-cta/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/text-media/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/two-col-text/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/vertical-carousel/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/vertical-spacer/block.json');

// disable default WordPress blocks and enable only custom blocks

add_filter('allowed_block_types', 'theme_blocks');

function theme_blocks($allowed_blocks)
{

  return array(
    'acf/accordion',
    'acf/additional-info',
    'acf/copy',
    'acf/hero-cover',
    'acf/image-scroll',
    'acf/info-grid',
    'acf/links-blocks',
    'acf/logo-grid',
    'acf/map',
    'acf/media',
    'acf/media-carousel',
    'acf/more-work',
    'acf/people-carousel',
    'acf/posts-loop',
    'acf/project-intro',
    'acf/projects',
    'acf/selected-clients',
    'acf/services-list',
    'acf/text-cta',
    'acf/text-media',
    'acf/two-col-text',
    'acf/vertical-carousel',
    'acf/vertical-spacer',
  );
}
