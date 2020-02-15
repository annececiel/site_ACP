<?php require_once "/recaptchalib.php";
error_reporting(E_ALL ^ E_NOTICE); 
session_start();
$errors = $_SESSION['errors'];
unset($_SESSION['errors']);

?>

<section>
    <h2>Keep in touch?</h2>
    <h3>Contactez-nous par email</h3>

    <div class="container">
        <form role="form" method="POST" id="form" action="includes/maj.php">
        <!--<form role="form" method="POST" action="index.php?page=confirmation">-->
            <?php 
            if($errors && !empty($errors)){
                foreach($errors as $error){
                    ?>
                    <div class="alert alert-danger" role="alert"><?=$error?></div>
                    <?php
                }
            }
            ?>
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

            <!-- reCAPTHA -->
            <div class="g-recaptcha" data-sitekey="6LeX7dgUAAAAAH45FOsvF68SPqGkaoxMqp4HkcMN" id="capt" required></div>


            <div class="text-center">
                <button type="submit" value="submitmsg" id="submitmsg" class="btn btn-primary btn-lg">Envoyer le message</button>
            </div>
        </form>       
</section>


<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('capt', {
          'sitekey' : '6LeX7dgUAAAAAH45FOsvF68SPqGkaoxMqp4HkcMN'
        });
      };
</script>


