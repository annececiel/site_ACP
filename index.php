<?php
require_once 'includes/functions.php';

if (!isAuthenticated()) {
	if (!empty($_POST['login']) && !empty($_POST['passwd'])){
		loginUser($_POST['login'], $_POST['passwd']);
	}
} else if(!empty($_GET['disconnect']) && $_GET['disconnect'] == 'yes') {
	logoutUser();
}

$page = 'page1';
if (!empty($_GET['page'])) $page = $_GET['page'];
$_SESSION['redirect_to'] = $page;

if (!isAuthenticated() && isSecurePage($page))
	$page = 'login';

require_once 'includes/header.php';
require_once 'includes/menu.php';

$src = 'pages/' . $page . '.php';
if (file_exists($src))
	require_once $src;
else 
	echo 'Erreur 404';
require_once 'includes/footer.php';