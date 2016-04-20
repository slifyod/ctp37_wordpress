<?php
/**
 * Created by PhpStorm.
 * User: yunus
 * Date: 20/04/2016
 * Time: 11:43
 */
//checks the connexion fields
if ( isset( $_POST['loginButton'] ) )
{
	if ( isset( $_POST['loginButton'] ) )
	{
		$login = $_POST['log'];
		$password = $_POST['pwd'];
		global $wpdb;
		$results = $wpdb->get_results( "SELECT * FROM adherent WHERE emailAdherent='$login'" );
		$results=$results[0];
		if ( sizeof( $results ) > 0 && $results->motDePasseAdherent== $password )
		{
			if ( isset( $_COOKIE['menu'] ) )
			{
				unset( $_COOKIE['menu'] );
				setcookie( 'menu', 'menu1', -1 );
			}
			setcookie( 'menu', 'menu1', time() + 1800 );
			$isLogged = true;
		}
		else
		{
			$isLogged = false;
		}
	}
	var_dump( $isLogged );
}

?>