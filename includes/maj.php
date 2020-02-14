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

// recuperation des valeurs du formulaire
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$ip = $_SERVER['REMOTE_ADDR'];


/*function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  echo 'L adresse IP de l\'utilisateur est : '.getIp();*/
//  echo $_SERVER['REMOTE_ADDR'];

// insertion des valeurs dans la base

$req = $bdd->prepare('INSERT INTO messages (name, firstname, email, msg, date_msg) VALUES(?,?,?,?,NOW())');
$req->execute(array($_POST['name'],$_POST['firstname'],$_POST['email'],$_POST['msg']));

//ajouter l'adresse ip de l'utilisateur à la bdd
$query='INSERT INTO messages (ip) VALUES($ip)';

// Redirection du visiteur vers la page de confirmation
header('Location:http://localhost/site_ACP/index.php?page=page2bis');
//echo ("Maj ok");
?>

