<?php
  get_header();
?>
<div class="content section">
    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
        <?php
            if( have_posts() ) {
                while( have_posts() ) {
                    the_post();
                    
                    get_template_part('template-parts/content', 'archive');

                }
            }
        ?>

    </div>
</div>

<?php
  get_footer();
?>