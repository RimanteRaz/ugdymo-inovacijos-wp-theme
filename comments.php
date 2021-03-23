<?php if (post_password_required() ){
    return;
} ?>

<div>
    <?php 
    if(have_comments()): ?>

        <h3 class="bold comments-title">Klausimai bei patarimai</h3>
        <!-- COMMENT -->
        <?php the_comments_navigation(); ?>
        <ol>
            <?php 
            wp_list_comments(
                array(
                    'style' => 'ol',
                    'short_ping' => true,
                    'max_depth' => 2,
                    // 'avatar_size' => 32,
                )
                );
            ?>
        </ol>

        <?php 
        the_comments_navigation();
        if( ! comments_open() ):
            ?>
            <p><?php esc_html_e('Comments are closed.', '_s'); ?></p>
            <?php 
        endif;
    
    endif;  

    comment_form();
    ?>
    <!-- Close have_comments() if statement -->


    <!-- <div class="comment">
        <div class="comment-head">
            <div class="avatar">
                <img src="images/kavatar.png" alt="">
            </div>
            <div class="user-info">
                <p class="text-medium bold">Klausimas</p>
                <p class="text-small">2020-02-03</p>
            </div>
        </div>
        <div class="comment-content">
            <p>Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Volutpat consequat mauris nunc congue
            nisi. In hac habitasse platea dictumst vestibulum rhoncus est. Congue mauris rhoncus aenean vel elit
            scelerisque mauris pellentesque.</p>
        </div>
        <div>
            <a href="" class="btn-secondary">Reply</a>
        </div>
    </div> -->

    <!-- COMMENT REPLY -->
    <!-- <div class="comment-reply">
        <div class="comment">
            <div class="comment-head">
                <div class="avatar">
                    <img src="images/mavatar.png" alt="">
                </div>
                <div class="user-info">
                    <p class="text-medium bold">Mokytoja</p>
                    <p class="text-small">2020-02-03</p>
                </div>
            </div>
            <div class="comment-content">
                <p>Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Volutpat consequat mauris nunc congue
                nisi. In hac habitasse platea dictumst vestibulum rhoncus est. Congue mauris rhoncus aenean vel elit
                scelerisque mauris pellentesque.</p>
            </div>
            <div>
                <a href="" class="btn-secondary">Reply</a>
            </div>
        </div>
    </div> -->
</div>