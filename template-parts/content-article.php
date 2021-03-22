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
            <?php $categories = wp_get_post_categories(get_the_ID());
            if ( $categories ): ?>
                <h6>Kategorija(-os):</h6>
                <?php foreach($categories as $category) : ?>
                    <a class="category" href="<?php echo esc_url(get_category_link($category)) ?>">
                        <?php echo esc_html(get_cat_name($category)) ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="tag-div">
            <?php $tags = get_the_tags();
            if ( $tags ) : ?>
                <h6>Ugdomos komptenecijos:</h6>
                <?php foreach ( $tags as $tag ) : ?>
                    <a class="tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php if( is_active_sidebar('article_1') ) { ?>
            <?php dynamic_sidebar( 'article_1' ); ?>
        <?php } ?>
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
            <?php $categories = wp_get_post_categories(get_the_ID());
            if ( $categories ): ?>
                <h6>Kategorija(-os):</h6>
                <?php foreach($categories as $category) : ?>
                    <a class="category" href="<?php echo esc_url(get_category_link($category)) ?>">
                        <?php echo esc_html(get_cat_name($category)) ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="tag-div">
            <?php
            $tags = get_the_tags();
            if ( $tags ) : ?>
                <h6>Ugdomos komptenecijos:</h6>
                <?php foreach ( $tags as $tag ) : ?>
                    <a class="tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php if( is_active_sidebar('article_1') ) { ?>
            <?php dynamic_sidebar( 'article_1' ); ?>
        <?php } ?>
    </div>
</div>