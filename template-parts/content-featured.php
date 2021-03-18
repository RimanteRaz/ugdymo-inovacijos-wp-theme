<div class="grid-cell new-post">
    <div class="img-div">
        <img
            src="<?php echo esc_url(the_post_thumbnail_url('large')); ?>"
            alt="">
    </div>
    <div class="info-div">
        <?php $categories = wp_get_post_categories(get_the_ID());
        if ( $categories ): ?>
            <?php foreach($categories as $category) : ?>
                <a class="category" href="<?php echo esc_url(get_category_link($category)) ?>">
                    <?php echo esc_html(get_cat_name($category)) ?>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
        <h5 class="title"><a href="<?php echo esc_url(the_permalink()); ?>"><?php echo esc_html(the_title()); ?></a></h5>
        <div class="meta">
            <p class="text-small author">
                <?php echo esc_html(the_field("authors_name"))?></br>
                <?php echo esc_html(the_field("authors_school"))?>
            </p>
        </div>
    </div>
    <a href="<?php echo esc_url(the_permalink()); ?>" class="read-more">
        <div>
            Skaityti
        </div>
    </a>
</div>