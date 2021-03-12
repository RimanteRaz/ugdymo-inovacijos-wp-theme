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