<form name="loginform" id="loginform" action="http://localhost/site_wordpress/wordpress/wp-login.php" method="post">

<div class = "flex-connection">
			<div class="login-username">
				<label for="">Identifiant ou adresse e-mail</label>
				<input type="text" name="log" id="" class="input" value="" size="20" />
			</div>
			<div class="login-password">
				<label for="">Mot de passe</label>
				<input type="password" name="pwd" id="" class="input" value="" size="20" />
			</div>

			<div
      class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Se souvenir de moi</label></div>
			<div class="login-submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Se connecter" />
				<input type="hidden" name="redirect_to" value="http://localhost/site_wordpress/wordpress" />
			</div>
</div>

		</form>
