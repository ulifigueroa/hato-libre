<?php wp_footer(); ?>

  <?php $logo_white = get_theme_mod('logo_white', get_template_directory_uri().'/images/logo-white.png'); ?>

  <footer class="site-footer" role="contentinfo">
    <div class="content">
      <?php echo '<img src="'.esc_url($logo_white).'" alt="Hato Libre Logo" />'; ?>
    </div>
  </footer>

</body>
</html>
