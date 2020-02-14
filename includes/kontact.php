<section>
    <h2>Keep in touch?</h2>
    <h3>Contactez-nous par email</h3>

    <div class="container">
        <form role="form" method="POST" action="includes/maj.php">
        <!--<form role="form" method="POST" action="index.php?page=confirmation">-->
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" placeHolder="Votre nom">
            </div>
            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeHolder="Votre prénom">
            </div>
            <div class="form-group">
                <label for="email">Email<span class="glyphicon glyphicon-asterisk primary"></label>
                <input type="email" class="form-control" name="email" id="email" placeHolder="Votre email" required>
            </div>
            <div class="form-group">
                <label for="message">Message<span class="glyphicon glyphicon-asterisk primary"></label>
                <textarea class="form-control" rows="5" id="msg" name="msg" placeHolder="Votre message" required></textarea>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="cgu" id="cgu" required>J'accepte les CGU du site et les mentions relatives à l'enregistrement, l'utilisation et la suppression de mes données personnelles (<a href="#" target="_blank" title="Accès aux mentions légales">lire</a>)
                <span class="glyphicon glyphicon-asterisk primary">
                </label>
            </div>
            <div class="primary">
                <p><span class="glyphicon glyphicon-asterisk"> Champs obligatoires, merci!</p>
            </div>
            <div class="text-center">
                <button type="submit" value="submit" id="submit" class="btn btn-primary btn-lg">Envoyer</button>
            </div>
        </form>
        
</section>

