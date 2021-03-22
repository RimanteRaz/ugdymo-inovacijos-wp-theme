  <!-- FOOTER -->
  <footer class="dark-bg">
    <div class="section container footer">
      <div class="left">
        <?php if( is_active_sidebar('footer_1') ) { ?>
          <?php dynamic_sidebar( 'footer_1' ); ?>
        <?php } ?>
      </div>
      <div class="right text-small">
        <?php if( is_active_sidebar('footer_2') ) { ?>
          <?php dynamic_sidebar( 'footer_2' ); ?>
        <?php } ?>
      </div>
    </div>
  </footer>
</body>

<?php 
  wp_footer()
?>
</html>