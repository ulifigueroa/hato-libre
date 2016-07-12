<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

  <?php edit_post_link( __( 'Edit', 'hato-libre' ), '<footer class="page-footer content"><span class="edit-link">', '</span></footer><!-- .page-footer -->' ); ?>
</article>
