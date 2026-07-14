<section class="modal-menu">
	<button class="close-modal">fechar <i class="fas fa-times"></i></button>
	<nav class="menu">
		<menu class="list-links">
    <nav class="main-menu">
					<?php
						wp_nav_menu ( array (
							'theme_location' => 'mobile-menu',
							'container_class' => 'mobile-menu-list' )
						);
					?>
				</nav>
		</menu>
	</nav>
</section>

<footer id="footer" class="footer reveal fade-bottom">
  <div class="footer-main">
    <div class="layout">
      <div class="col">
        <?php if (is_active_sidebar('footer-col-1')) : ?>
          <?php dynamic_sidebar('footer-col-1'); ?>
        <?php endif; ?>
      </div>

      <div class="col">
        <?php if (is_active_sidebar('footer-col-2')) : ?>
          <?php dynamic_sidebar('footer-col-2'); ?>
        <?php endif; ?>
      </div>

      <div class="col">
        <?php if (is_active_sidebar('footer-col-3')) : ?>
          <?php dynamic_sidebar('footer-col-3'); ?>
        <?php endif; ?>
      </div>

      <div class="col">
        <?php if (is_active_sidebar('footer-col-4')) : ?>
          <?php dynamic_sidebar('footer-col-4'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="footer-base">
    <div class="layout">
      <?php if ( get_theme_mod( 'site_logo' ) ): ?>
        <figure class="footer-logo">
          <a href="<?php echo esc_url( home_url( '/' )); ?>">
              <img src="<?php echo esc_attr(get_theme_mod( 'site_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
          </a>
        </figure>
      <?php endif; ?>
      <?php if (is_active_sidebar('footer-copy')) : ?>
        <div id="footer-copy" class="footer-copy">
          <?php dynamic_sidebar('footer-copy'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/common.min.js" defer></script>

</body>

<?php wp_footer(); ?>

</html>