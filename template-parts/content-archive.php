<div class="grid-item blog-post">
    <div class="img-div">
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
    </div>
    <div class="info-div">
        <div class="categories">
            <div class="category">
                <?php the_category(); ?>
            </div>
        </div>
        <h4><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h4>
        <p class="text-small author">
            <?php echo esc_html(the_field("authors_name"))?>
        </p>
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
    <a href="<?php the_permalink(); ?>" class="read-more">
        <div>
        Skaityti  
        </div>
    </a>
</div>