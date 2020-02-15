<?php
require_once __DIR__."/recaptchalib.php";

// Register API keys at https://www.google.com/recaptcha/admin

function checkPostParamas(){

  $errors = array();
  if(!isset($_POST['email']) || empty($_POST['email'])){
    $errors[] = "Email obligatoire";
  }
  if(isset($_POST['g-recaptcha-response'])) {
    $siteKey = "6LeX7dgUAAAAAH45FOsvF68SPqGkaoxMqp4HkcMN";
    $secret = "6LeX7dgUAAAAAH3XMOlQPY59VqicxLp-kDN708JW";
    
    // The response from reCAPTCHA
    $resp = null;
    // The error code from reCAPTCHA, if any
    $error = null;
    $reCaptcha = new ReCaptcha($secret);

    $resp = $reCaptcha->verifyResponse(
      $_SERVER['REMOTE_ADDR'],
        $_POST["g-recaptcha-response"]
    );
    if(!$resp || !$resp->success){
      $errors[]="Captcha invalide";
    }
  }else{
    $errors[]="Captcha invalide";
  }
  return $errors;
}

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$ip = $_SERVER['REMOTE_ADDR'];

if(empty($errors = checkPostParamas())){
  try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=messages; charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }
  $req = $bdd->prepare('INSERT INTO messages (name, firstname, email, msg, date_msg, ip) VALUES(?,?,?,?,NOW(), ?)');
//$req->execute(array($_POST['name'],$_POST['firstname'],$_POST['email'],$_POST['msg']));
$messageID = $req->execute(array($name, $firstname,$email,$msg, $ip));
header('Location:http://localhost/site_ACP/index.php?page=page2bis');

  
}else{
session_start();
$_SESSION['errors'] = $errors;
header('Location:http://localhost/site_ACP/index.php?page=page2');

}