<div class="blog-post">
    <div class="img-div">
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
    </div>
    <div class="info-div">
        <div class="categories">
        <a class="category" href="">Category</a>
        </div>
        <h4><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h4>
        <p class="text-small">Mokytoja Vardenė Pavardenė<br>Miesto Rašytojo gimnazija</p>
        <p><?php the_excerpt(); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>" class="read-more">
        <div>
        Skaityti
        </div>
    </a>
</div>