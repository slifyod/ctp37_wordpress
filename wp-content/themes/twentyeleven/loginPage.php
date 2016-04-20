<?php
/*
Template Name: Zone de connexion
*/
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
include("/Controller/LogDataController.php");
login(); ?>

<div id="primary">
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
        <div style="margin:auto;width:50% ">
            <form method="post" action="http://localhost/wordpress/index.php/connexion/" id="loginform" name="loginform">
                <p>
                    <label for="user_login">Identifiant : </label><br>
                    <input type="text" tabindex="10" size="20" value="" id="user_login" name="log">
                </p>

                <p>
                    <label for="user_pass">Mot de passe : </label><br>
                    <input type="password" tabindex="20" size="20" value="" id="user_pass" name="pwd">
                </p>

                <p><label><input type="checkbox" tabindex="90" value="forever" id="rememberme" name="rememberme">
                    Rester connecter</label>
                    | <a href="http://www.NOM_DU_SITE.com/wp-login.php?action=lostpassword">Mot de passe oublié</a></p>
                <p>
                    <input type="submit" tabindex="100" value="Se connecter" id="wp-submit" name="loginButton">
                    <input type="hidden" value="http://www.NOM_DU_SITE.com/" name="redirect_to">
                </p>
            </form>
        </div>
        <?php get_template_part( 'content', 'page' ); ?>

        <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>