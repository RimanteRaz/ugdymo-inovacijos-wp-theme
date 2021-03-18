<div class="grid-cell new-post">
    <div class="img-div">
        <img
            src="<?php echo esc_url(the_post_thumbnail_url('large')); ?>"
            alt="">
    </div>
    <div class="info-div">
        <div class="category">
            <?php the_category(); ?>
        </div>
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