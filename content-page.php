<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <section class="page-banner banner">
    <div class="content">
      <h1>Rastreabilidad y laboratorio son algunos de nuestros servicios</h1>

      <a href="#">Descargar catalogo de servicios</a>
    </div>
  </section>

  <section class="page-content content clear">
    <?php the_content(); ?>
    <?php
     wp_link_pages( array(
      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'hato-libre' ) . '</span>',
      'after'       => '</div>',
      'link_before' => '<span>',
      'link_after'  => '</span>',
      'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'hato-libre' ) . ' </span>%',
      'separator'   => '<span class="screen-reader-text">, </span>',
     ) );
    ?>
  </section>

  <?php edit_post_link( __( 'Edit', 'hato-libre' ), '<footer class="page-footer content"><span class="edit-link">', '</span></footer><!-- .page-footer -->' ); ?>
</article>
