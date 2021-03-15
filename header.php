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
  <nav <?php echo (is_admin_bar_showing()) ? ' style="top: 32px;"' : ''; ?>>
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
        <a href="page.html" class="nav-cta btn-light">Atsiųskite savo inovaciją</a>
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
        <div class="dt-nav-cta">
          <a href="page.html" class="btn-light"><img
              src="https://img.icons8.com/metro/26/000000/paper-plane.png" /><span>Atsiųskite savo inovaciją</span></a>
        </div>
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