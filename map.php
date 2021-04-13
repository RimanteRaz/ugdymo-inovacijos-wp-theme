<?php /*Template Name: Map*/ ?>
<?php
  get_header();
?>
<div class="map">
<?php echo wp_kses_post(the_content()); ?>
</div>
<?php
  get_footer();
?>