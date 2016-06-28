<?php get_header(); ?>

<main class="site-main" role="main">
  <?php $banner = get_theme_mod('logo', get_template_directory_uri().'/images/banner.png'); ?>

  <?php echo '<img src="'.esc_url($banner).'" alt="Banner" />'; ?>
</main>

<?php get_footer(); ?>
