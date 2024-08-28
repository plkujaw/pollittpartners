<?php
$next_project =  get_field('next_project', get_the_ID());
get_header();
the_content();

if ($next_project) get_template_part('inc/template-parts/parts/next-project', null, array(
  'next-project' => $next_project
));



get_footer();
