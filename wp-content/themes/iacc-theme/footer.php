		</main><!-- /#main -->
		<footer id="footer">
			<div class="container-fluid" style="max-width:1920px;">
				<div class="row">

				<!-- Logo Footer -->
				<div class="col-md-1 ft-vr-center logo-footer">
					<a id="logo-footer" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>
				</div>

				<!-- Address -->
				<div class="col-md-3 ft-vr-center" id="footer-address">
					<p class="footer-address">
						<?php echo get_option('footer-text'); ?>
					</p>
				</div>
				<div class="col-md-5">
					<div class="row">
					<div class="col-md-1"></div>
					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'col-md-4 ft-vr-center menu-ft-1',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav footer-nav">%3$s</ul>',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
						endif;

							?>
							<div class="col-md-1 no-mobile"></div>
					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu-b',
									'container'       => 'nav',
									'container_class' => 'col-md-4 ft-vr-top menu-ft-2',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav footer-nav">%3$s</ul>',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
						endif;

							?>
							<div class="col-md-1"></div>
					</div>
				</div>

				<!-- Social -->
				<div class="col-md-3 ft-vr-center" id="social-address">
					    <p class="menu-social">
					      <a href="<?php echo get_option('facebook-url'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					      <a href="<?php echo get_option('linkedin-url'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					      <a href="<?php echo get_option('instagram-url'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					      <a href="<?php echo get_option('twitter-url'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					    </p>
				</div>

					
				</div><!-- /.row -->
			</div><!-- /.container -->

		</footer><!-- /#footer -->
		<div id="copyright">
			<div class="container-xxl footer-copyright">
				<div class="row">
					<div class="col-12">
							<p id="copyright-text"><?php echo get_option('copyright-text'); ?></p>
						
					</div>
				</div>
			</div>
		</div>
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>

	<script>
	$(document).ready(function(){
	  $(".dropdown").on("hide.bs.dropdown", function(){
	    $(".btn").html('Dropdown <span class="caret"></span>');
	  });
	  $(".dropdown").on("show.bs.dropdown", function(){
	    $(".btn").html('Dropdown <span class="caret caret-up"></span>');
	  });
	});

	function activatemenu388() {
	
	setTimeout(function() {var link = document.getElementById("a-menu-item-388");
	document.getElementById('a-menu-item-388').removeAttribute("onclick");

    link.setAttribute('href', "./services/");
		},2000);
	
	}

	function activatemenu189() {
	
	setTimeout(function() {var link = document.getElementById("a-menu-item-189");
	document.getElementById('a-menu-item-189').removeAttribute("onclick");

    link.setAttribute('href', "./career-visa/");
		},2000);
	
	}
	
	</script>
</body>
</html>
