<?php
  get_header();
?>
<div class="content section">
    <div class="container">
        <?php if( have_posts() ) { ?>
            <h2 class="archive-title">
                <?php printf( __( 'Paieškos rezultatai: %s', 'shape' ), '<span>' . esc_html(get_search_query()) . '</span>' ); ?>
            </h2>
    </div>
    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
                <?php 
                while( have_posts() ) {
                    the_post();
                    
                    get_template_part('template-parts/content', 'archive');

                }
            }
            else {?>
                
                <div class="my-5 py-5">
                    <h2>Paieškos rezultatų nėra</h2>
                    <p>Nepavyko rasti įrašų, atitiktų jūsų įvestą paieškos terminą: "<?php echo esc_html(get_search_query()) ?> "</p>
                </div>

            <?php }; ?>

    </div>
</div>
<?php
  get_footer();
?>