<?php 

$login = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."/wp-login.php";

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<form name="loginform" id="loginform" action="./" method="post">

<div class = "d-flex">
			<div >
				<label for="">Identifiant ou adresse e-mail</label>
				<input type="text" name="log" id="" class="input" value="" size="20" />
			</div>

			<div style > 
				<label for="">Mot de passe</label>
				<input type="password" name="pwd" id="" class="input" value="" size="20" />
			</div>

			<div  class=""><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Se souvenir de moi</label></div>
			
			<div class="">
				<input type="submit" name="wp-submit" id="wp-submit"  value="Se connecter" />
				<input type="hidden" name="redirect_to" value="<?php echo $url; ?>" />
			</div>
</div>

		</form>

		