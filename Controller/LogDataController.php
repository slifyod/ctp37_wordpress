<?php

/*function userConnexion()
{
	return include( "Connexion.php" );
}*/

function login()
{
	if ( isset( $_POST['loginButton'] ) )
	{
		$login = $_POST['log'];
		$password = $_POST['pwd'];
		global $wpdb;
		$results = $wpdb->get_results( "SELECT * FROM adherent WHERE emailAdherent='$login'" );
		if ( sizeof($results)>1  && $results['motDePasseAdherent'] == $password )
		{
			if ( isset( $_COOKIE['menu'] ) )
			{
				unset( $_COOKIE['menu'] );
				setcookie( 'menu', 'menu1', -1);
			}
			setcookie( 'menu', 'menu1', time() + 1800 );
			return true;
		}
	}
	return false;
}

function logout()
{
	if ( isset( $_COOKIE['menu'] ) )
	{
		unset( $_COOKIE['menu'] );
	}
}

function isUserLogged()
{
	if ( isset( $_COOKIE['menu'] ) )
	{
		if ( $_COOKIE['menu'] == 'menu1' )
		{
			return true;
		}
	}
	return false;
}

?>