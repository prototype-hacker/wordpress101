		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="footer-left col-md-6">
						<p>&copy; Copyright 2015 Prototype Hacker Inc.</p>
					</div>
					<div class="footer-menu col-md-6">
					<?php
			            $args = array(
			                'theme_location' => 'footer-menu',
			            );
			            wp_nav_menu( $args ); 
					?>
					</div>
				</div>
			</div>			
		</footer>
		<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/main.js">
		</script>
	</body>
</html>