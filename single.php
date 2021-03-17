<?php
  get_header();
?>

<div class="content section container">
    <div class="row-2-col">
    <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                
                get_template_part('template-parts/content', 'article');

            }
        }
    ?>
    
    </div>
</div>

<?php
  get_footer();
?>