<?php get_header() ?>

<div id="content" class="two-thirds">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_title('<h2>', '</h2>');
      the_content();
    endwhile;
  else :
    _e('Sorry, no posts matched your criteria.', 'ssungwoo_portfolio');
  endif;
  ?>
</div><!-- #content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>