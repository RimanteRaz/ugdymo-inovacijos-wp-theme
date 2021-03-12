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
        <h6>Ugdymo inovacijos</h6>
      </div>
      <div class="nav-bar">
        <ul class="nav-links primary-menu">
          <li><a href="front-page.html">Pagrindinis</a></li>
          <li><a href="archive.html">Inovacijos</a></li>
          <li><a href="">Žemėlapis</a></li>
        </ul>
        <ul class="nav-links secondary-menu">
          <li><a href="search.html">
            <span class="material-icons-outlined">search</span>Paieška</a>
          </li>
        </ul>
        <a href="page.html" class="nav-cta btn-light">Atsiųskite savo inovaciją</a>
      </div>
      <div class="dt-nav-bar">
        <div class="dt-nav-links dt-primary-menu">
          <ul>
            <li><a href="front-page.html">Pagrindinis</a></li>
            <li><a href="archive.html">Inovacijos</a></li>
            <li><a href="404.html">Žemėlapis</a></li>
          </ul>
        </div>
        <div class="dt-nav-cta">
          <a href="page.html" class="btn-light"><img
              src="https://img.icons8.com/metro/26/000000/paper-plane.png" /><span>Atsiųskite savo inovaciją</span></a>
        </div>
        <div class="dt-nav-links dt-secondary-menu">
          <ul>
            <li><a href="search.html">
              <span class="material-icons-outlined">search</span>Paieška</a>
            </li>
          </ul>
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