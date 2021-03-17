<div class="col-70">
    <article class="article">
        <h3 class="title"><?php echo esc_html(the_title()); ?></h3>
        <div class="date text-small">
        <span class="material-icons-outlined">calendar_today</span><?php echo esc_html(the_date('Y-m-d')); ?></div>
        <figure class="featured-img">
        <div>
            <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="">
        </div>
        <figurecaption class="text-small"><?php echo get_the_post_thumbnail_caption();?></figurecaption>
        </figure>
        <div class="post-text">
            <?php
                echo wp_kses_post(the_content());
            ?>
        </div>
    </article>

    <!-- SIDEBAR MOBILE -->
    <div class="article-sidebar-mobile">
        <div class="author">
            <h6>Inovaciją atsiuntė:</h6>
            <div class="author-data text-small">
                <p><?php echo esc_html(the_field("authors_name")); ?></p>
                <p><?php echo esc_html(the_field("authors_school")); ?></p>
            </div>
            <div class="contact-author text-small">
                <p class=" bold">Susisiekite:</p>
                <p><a href="" class="">mokytoja@gmail.com</a></p>
            </div>
        </div>
        <div class="cat-div">
            <h6>Kategorija(-os):</h6>
            <div class="category">
                <?php the_category(); ?>
            </div>
        </div>
        <div class="tag-div">
        <h6>Ugdomos komptenecijos:</h6>
            <?php the_tags('<span class="tag">', '</span><span class="tag">', '</span >'); ?>
        </div>
    </div>
</div>

<div class="col-30">
<!-- SIDEBAR -->
    <div class="article-sidebar">
        <div class="author">
        <h6>Inovaciją atsiuntė:</h6>
        <div class="author-data text-small">
            <p><?php echo esc_html(the_field("authors_name")); ?></p>
            <p><?php echo esc_html(the_field("authors_school")); ?></p>
        </div>
        <div class="contact-author text-small">
            <p class=" bold">Susisiekite:</p>
            <?php echo wp_kses_post(the_field('authors_contact'));?>
        </div>
        </div>
        <div class="cat-div">
            <h6>Kategorija(-os):</h6>
            <div class="category">
                <?php the_category(); ?>
            </div>
        </div>
        <div class="tag-div">
        <h6>Ugdomos komptenecijos:</h6>
            <?php the_tags('<span class="tag">', '</span><span class="tag">', '</span >'); ?>
        </div>
    </div>
</div>