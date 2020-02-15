<div id="corps" class="container-fluid">
    <h1>Authentification</h1>
    <h2>Vous devez vous identifiez afin d'accéder à ce site</h2>
	<div class="container">
		<form action="index.php" method="post">
			<div class="form-group">
				<label for="login">Login</label>
				<input type="text" name="login" class="form-control" id="login" placeHolder="Votre nom login ici">
			</div>
			<div class="form-group">
				<label for="passwd">Mot de passe</label>
				<input type="password" name="passwd" class="form-control" id="passwd" placeHolder="Votre mot de passe"><br>
			</div>
			<div class="form-group text-center">
				<button type="submit" value="login" class="btn btn-primary btn-lg">Connexion</button>
			</div>
		</form>
	</div>
</div>
