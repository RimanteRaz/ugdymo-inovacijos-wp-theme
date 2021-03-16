<?php
  get_header();
?>
  
  <!-- FRONT PAGE HEADER -->
  <header class="front-page-header" style="background: url(<?php echo esc_url(the_field('hero_bg_img'));?>) contain repeat-x, linear-gradient(#141414, #052835)">
    <div class="row-2-col container">
      <div class="col-50 left">
        <?php 
          if(get_field('hero_title')):
            echo wp_kses_post(the_field('hero_title'));
          endif; ?>
        <?php 
          if(get_field('hero_text')):
            echo wp_kses_post(the_field('hero_text'));
          endif; ?>
      </div>
      <div class="col-50 right">
        <?php if (get_field('hero_stars')): ?>
          <img src=<?php echo esc_url(the_field('hero_stars')); ?> alt="" class="header-stars">
        <?php endif; ?>
        <?php if (get_field('hero_img')): ?>
          <img src=<?php echo esc_url(the_field('hero_img')); ?> alt="" class="header-lithuania">
        <?php endif; ?>
        <?php 
          $link = get_field('hero_cta');
            if ($link): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class="header-cta btn-light text-large" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" ><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
      </div>      
    </div>
  </header>
  <div class="header-wave">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150"><path fill="#052835" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,112C480,96,600,64,720,64C840,64,960,96,1080,106.7C1200,117,1320,107,1380,101.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
  </div>

  <div class="content">
    <!-- NEW POSTS -->
    <div class="light-2-bg">
      <div class="featured-posts container">

        <div class="row-2-col title-row">
          <div class="col-50 title-cell">
            <h2 class="section-title">NAUJAUSI ĮRAŠAI</h2>
          </div>
          <div class="col-50 read-all-1">
            <a class="btn-primary text-large" href="">Visi įrašai</a>
          </div>
        </div>

        <div class="row-3-col">

          <div class="grid-cell new-post">
            <div class="img-div">
              <img
                src="https://images.unsplash.com/photo-1603354350317-6f7aaa5911c5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                alt="">
            </div>
            <div class="info-div">
              <a class="category" href="">Category</a>
              <h5 class="title"><a href="">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></h5>
              <div class="meta">
                <div class="text-small">Mokytoja Vardenė Pavardenė</div>
                <div class="text-small">Miesto Rašytojo gimnazija</div>
              </div>
            </div>
            <a href="" class="read-more">
              <div>
                Skaityti
              </div>
            </a>
          </div>

          <div class="grid-cell new-post">
            <div class="img-div">
              <img
                src="https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=748&q=80"
                alt="">
            </div>
            <div class="info-div">
              <a class="category" href="">Category</a>
              <h5 class="title"><a href="">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></h5>
              <div class="meta">
                <div class="text-small">Mokytoja Vardenė Pavardenė</div>
                <div class="text-small">Miesto Rašytojo gimnazija</div>
              </div>
            </div>
            <a href="" class="read-more">
              <div>
                Skaityti
              </div>
            </a>
          </div>

          <div class="grid-cell new-post">
            <div class="img-div">
              <img
                src="https://images.unsplash.com/photo-1610008885395-d4b47c2f5c8c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80"
                alt="">
            </div>
            <div class="info-div">
              <a class="category" href="">Category</a>
              <h5 class="title"><a href="">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></h5>
              <div class="meta">
                <div class="text-small">Mokytoja Vardenė Pavardenė</div>
                <div class="text-small">Miesto Rašytojo gimnazija</div>
              </div>
            </div>
            <a href="" class="read-more">
              <div>
                Skaityti
              </div>
            </a>
          </div>

        </div>

        <div class="read-all-2">
          <a class="btn-primary text-large" href="">Visi įrašai</a>
        </div>

      </div>
    </div>

    <!-- SUBMIT YOUR EXAMPLE-->
    <div class="light-1-bg">
      <div class="container">
        <div class="submit-section">
          <div class="text-card">
            <?php if(get_field('submit_card_title')): ?>
              <h4><?php echo wp_kses_post(the_field('submit_card_title')); ?></h4>
            <?php endif; ?>
            <?php if(get_field('submit_card_text')): ?>
              <p><?php echo wp_kses_post(the_field('submit_card_text')); ?></p>
            <?php endif; ?>
            <div class="button">
            <?php 
              $link = get_field('submit_card_btn');
                if ($link): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a class="btn-primary text-medium" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" ><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
            </div>
          </div>
          <img src="<?php echo esc_url(the_field('submit_side_img')); ?>" alt="" class="submit-section-img">
        </div>
      </div>
      
    </div>

  </div>

<?php
  get_footer();
?>