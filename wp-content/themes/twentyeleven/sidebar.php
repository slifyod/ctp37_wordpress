<?php
/**
 * Sidebar containing the main widget area
 *
 * @package    WordPress
 * @subpackage Twenty_Eleven
 * @since      Twenty Eleven 1.0
 */
include( "/Controller/LogDataController.php" );
$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
	?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( !dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
				<ul>
					<?php wp_get_archives( array ( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
				<ul>
					<?php wp_register();
					wp_meta();
					if ( isset( $_COOKIE['menu'] ) )
					{
						echo "<li>" . $_COOKIE['menu'] . "</li>";
					}
					if ( !isUserLogged() )
					{ ?>
						<li><a href="index.php/connexion/">Connexion utilisateur</a></li>
					<?php }
					else
					{ ?>
						<li><a href="index.php/deconnexion/">Deconnexion utilisateur</a></li>
					<?php } ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area
		?>
	</div><!-- #secondary .widget-area -->
<?php endif; ?>