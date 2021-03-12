<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php 
  wp_head();
  ?>
  <!-- <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet"> -->
  <title>Ugdymo inovacijos</title>
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

  <!-- HEADER -->
  <header class="front-page-header">
    <div class="row-2-col container">
      <div class="col-50 left">
        <h1>Lietuvos mokyklose gausu <strong>stebuklų</strong></h1>
        <p>Tam, kad pasisemtum įkvepiančių ugdymo pavyzdžių nebūtina keliauti į Švediją. Ieškok ir dalinkis gerosiomis
          praktikomis kartu su kolegomis mokytojais iš visos Lietuvos!</p>
      </div>
      <div class="col-50 right">
        <img src="images/stars-06.svg" alt="" class="header-stars">
        <img src="images/lithuania-with-pointers-04.svg" alt="" class="header-lithuania">
        <button class="header-cta btn-light text-large">Žiūrėti žemėlapį</button>
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
            <h4>Pasidalinkite savo inovacija</h4>
            <p>Siekiame, kad šis puslapis taptų vieta, kurioje kiekvienas galėtų rasti kažką naujo ir aktualaus, ką
              galėtų pritaikyti ugdymo(si) procese. Juk dalintis apsimoka!</p>
            <div class="button">
              <a href="" class="btn-primary text-medium">Pildyti formą</a>
            </div>
          </div>
          <img src="images/woman-with-laptop.svg" alt="" class="submit-section-img">
        </div>
      </div>
      
    </div>

  </div>

  <!-- FOOTER -->
  <footer class="dark-bg">
    <div class="section container footer">
      <div class="left">
        <h5><strong>Prenumeruokite naujienas</strong></h6>
          <p>Užpildykite žemiau esančią formą ir mes Jums pranešime apie naujus įrašus.</p>
          <form class="subscribeForm" action="">
            <label for="email" class="text-medium">Jūsų el. pašto adresas:</label>
            <input type="email" id="email" name="email" placeholder="El. pašto adresas...">
            <div class="checkbox">
              <label for="privacyPolicy" class="text-small">
                <input type="checkbox" name="privacyPolicy" id="privacyPolicy" value="agree">
                <span>
                  Susipažinau su duomenų naudojimo aprašu ir sutinku, kad mano pateikti duomenys būtų naudojami
                  informavimo tikslais.
                </span>
              </label>
            </div>
            <div class="btn-div">
              <button type="submit" value="submit" class="btn-light text-medium">Pateikti</button>
            </div>
          </form>
      </div>
      <div class="right text-small">
        <p>Puslapiu <a href="">ugdymoinovacijos.lt</a> rūpinasi asociacija „Žinių ekonomikos forumas“</p>
        <p>Jei turite klausimų susisiekite su mumis el. p. <a href="">info@zef.lt</a> arba tel. nr. +37060000000.
          Daugiau informacijos: <a href="">www.zef.lt</a>.</p>
      </div>
    </div>
  </footer>
</body>

<?php 
  wp_footer()
?>

</html>