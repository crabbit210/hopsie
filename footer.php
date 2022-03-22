<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="footer py-5 mt-auto bg-dark" role="contentinfo">
  <div class="container">
	  <div class="row justify-content-center">
	    <div class="col-md-12 text-center">
	      <h2 class="footer-heading">
	        <a href="/" class="logo"><?php bloginfo( 'name' ); ?></a>
	      </h2>
	      <?php h5bs_footer_nav(); ?>
	    </div>
	  </div>
	  <div class="row mt-5">
	    <div class="col-md-12 text-center">
	      <p class="copyright text-white"> &copy; <?= date( 'Y' ); ?> <?= get_bloginfo( 'name' ); ?>
	      </p>
	    </div>
	  </div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
