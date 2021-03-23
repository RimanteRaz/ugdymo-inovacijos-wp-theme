<?php
  get_header();
?>
<div class="content section">
    <div class="container">
        <?php the_archive_title( '<h2 class="archive-title">', '</h2>' ); ?>
    </div>
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
    <?php
        the_posts_pagination();
    ?>
</div>



<?php
  get_footer();
?>