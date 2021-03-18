<?php 
/**
 * Template Name: Search Page
 */
?> 

<?php
  get_header();
?>

<div class="content section container">
    <div class="search-card">
        <h2 class="section-title">PAIEŠKA</h2>
        <?php get_search_form(); ?> 
        <p>Arba pasirinkite vieną iš žemiau pateiktų kategorijų ar kompetencijų:</p>
        <div class="select-cat-or-tag">
        <div class="categories-div">
            <h6>Kategorijos:</h6>
            <?php $categories = get_categories();
            if ( $categories ):
                foreach($categories as $category) : ?>
                    <a class="category" href="<?php echo esc_url(get_category_link($category->term_id)) ?>">
                        <?php echo esc_html($category->name) ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="tags">
            <h6>Ugdomos kompetencijos:</h6>
            <?php
            $tags = get_tags('post_tag');
            if ( $tags ) :
                foreach ( $tags as $tag ) : ?>
                    <a class="tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        </div>
    </div>
</div>

<?php
  get_footer();
?>