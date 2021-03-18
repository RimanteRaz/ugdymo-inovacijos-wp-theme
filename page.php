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
    </div>
</div>

<?php
  get_footer();
?>