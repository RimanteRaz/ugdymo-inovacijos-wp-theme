<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php 
  wp_head();
  ?>
</head>

<body>
  <nav class="top-nav" <?php echo (is_admin_bar_showing()) ? ' style="top: 32px;"' : ''; ?>>
    <div class="nav-container">
      <div class="logo">
        <h6><a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h6>
      </div>
      <div class="nav-bar">
        <div class="nav-links primary-menu">
          <?php
            wp_nav_menu(
              array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul>%3$s</ul>'
              )
          );
          ?>
        </div>
        <div class="nav-links secondary-menu">
          <?php
            wp_nav_menu(
              array(
                  'menu' => 'secondary',
                  'container' => '',
                  'theme_location' => 'secondary',
                  'items_wrap' => '<ul>%3$s</ul>'
              )
          );
          ?>
        </div>
        <?php if (get_theme_mod('ugdino-nav-cta-display') == 1) {?>
          <a href="<?php echo esc_url(get_permalink(get_theme_mod('ugdino-nav-cta-link'))) ?>" 
          class="nav-cta btn-light">
            <?php echo esc_html(get_theme_mod('ugdino-nav-cta-text')) ?>
          </a>
        <?php } ?>
      </div>
      <div class="dt-nav-bar">
        <div class="dt-nav-links dt-primary-menu">
          <?php
            wp_nav_menu(
              array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul>%3$s</ul>'
              )
          );
          ?>
        </div>
        <?php if (get_theme_mod('ugdino-nav-cta-display') == 1) {?>
          <div class="dt-nav-cta">
            <a href="<?php echo esc_url(get_permalink(get_theme_mod('ugdino-nav-cta-link'))) ?>" class="btn-light"><img
                src="https://img.icons8.com/metro/26/000000/paper-plane.png" />
                <span>
                  
                  <?php echo esc_html(get_theme_mod('ugdino-nav-cta-text')) ?>
                  
                </span>
            </a>
          </div>
        <?php } ?>
        <div class="dt-nav-links dt-secondary-menu">
          <?php
            wp_nav_menu(
              array(
                  'menu' => 'secondary',
                  'container' => '',
                  'theme_location' => 'secondary',
                  'items_wrap' => '<ul>%3$s</ul>'
              )
          );
          ?>
          <!-- <ul>
            <li><a href="search.html">
              <span class="material-icons-outlined">search</span>Paieška</a>
            </li>
          </ul> -->
        </div>

      </div>
      <div class="burger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>