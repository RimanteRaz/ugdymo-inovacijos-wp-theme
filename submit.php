<?php /*Template Name: Submit*/ ?>

<?php
  get_header();
?>

<div class="content section container">
    <div class="page-content">
      <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                
                get_template_part('template-parts/content', 'page');

            }
        }
      ?>
      <?php if( is_active_sidebar('submit_widget_1') ) { ?>
          <?php dynamic_sidebar( 'submit_widget_1' ); ?>
        <?php } ?>
    </div>
</div>

<?php
  get_footer();
?>