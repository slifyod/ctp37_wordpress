<?php
if ( !isset( $_POST['loginButton'] ) )
{
	?>
	<div style="margin:auto;width:50% ">
		<form method="post" action="/wordpress/index.php/accueil" id="loginform" name="loginform">
			<p>
				<label for="user_login"> Identifiant : </label><br>
				<input type="text" tabindex="10" size="20" value="" id="user_login" name="log">
			</p>

			<p>
				<label for="user_pass"> Mot de passe : </label><br>
				<input type="password" tabindex="20" size="20" value="" id="user_pass" name="pwd">
			</p>

			<p><label><input type="checkbox" tabindex="90" value="forever" id="rememberme" name="rememberme">
					Rester connecter </label> | <a
					href="http://www.NOM_DU_SITE.com/wp-login.php?action=lostpassword"> Mot de passe
					oublié </a></p>
			<p>
				<input type="submit" tabindex="100" value="Se connecter" id="wp-submit" name="loginButton">
				<input type="hidden" value="http://www.NOM_DU_SITE.com/" name="redirect_to">
			</p>
		</form>
	</div>
	<?php
}
?>