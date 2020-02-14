<?php
// connexion à la base
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=messages; charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
<div id="corps" class="container-fluid">
    <h1>Bienvenue dans l'Admin</h1>
    <h2>Vos messages</h2>
    
    <section>
    <div class="container">
        <ul>

<?php
// recuperation des valeurs du formulaire
$reponse = $bdd->query('SELECT * FROM messages ORDER BY date_msg DESC LIMIT 0,15');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<!-- Liste des messages reçus -->
            <li class="list-msg">
                <strong>Le <?php echo $donnees['date_msg']." | Email : ".htmlspecialchars($donnees['email']) ; ?></strong>
                <button type="button" title="Voir tout message #<?php echo $donnees['index']?>" class="btn btn-primary btn-inline btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $donnees['index']?>">
                    <span class="glyphicon glyphicon-option-horizontal"></span>
                </button><br />
                <em class="text-muted">Message: <?php echo htmlspecialchars($donnees['msg']); ?></em>
            </li>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $donnees['index']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title">
            <strong>Envoyé le : <?php echo $donnees['date_msg']; ?> </strong>
        </h5>
        
      </div>
      <div class="modal-body">
        <p class="primary">
            <strong>Par </strong> <?php echo htmlspecialchars($donnees['name']) ." ". htmlspecialchars($donnees['firstname']). " | Email: ".htmlspecialchars($donnees['email']) ; ?>
        </p>
        <blockquote class="blockquote">
            <p><?php echo nl2br(htmlspecialchars($donnees['msg'])); ?></p>
        </blockquote>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Ok, merci, j'ai lu!</button>
      </div>
    </div>
  </div>
</div>

<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
        </ul>
    </div>      
        <legend class="text-center text-muted">
        <span class="primary">Pour des raisons de test, il a été choisi de faire apparaître sur cette page seulement les 15 derniers messages reçus</span>
        <br />    
        Les données affichées proviennent de la BDD et est alimentée par les messages envoyés depuis le formulaire de contact.<br />
        </legend>
    </section>
    <!--<p class="text-center">Page 3 - ADMIN</p>-->
</div>
