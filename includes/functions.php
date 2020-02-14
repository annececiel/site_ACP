<?php
session_start();

$users = [
	['pseudo' => 'Ben', 'login' => 'ben', 'passwd' => 'ben'],
	['pseudo' => 'Al', 'login' => 'al', 'passwd' => 'al'],
	['pseudo' => 'Admin', 'login' => 'admin', 'passwd' => 'admin'],
];

$pages = [
	['name' => 'page1', 'label' => 'Home'],
	['name' => 'page2', 'label' => 'Contact'],
	['name' => 'page3', 'label' => 'Admin', 'private' => true],
];

function isAuthenticated() {
	return !empty($_SESSION['pseudo']);
}

function isSecurePage($page) {
	global $pages;
	foreach ($pages as $p) {
		if ($page == $p['name'] && isset($p['private']))
			return $p['private'];
	}
	return false;
}

function loginUser($login, $passwd) {
	global $users;
	foreach ($users as $user) {
		if ($login == $user['login'] && $passwd == $user['passwd']) {
			$_SESSION['pseudo'] = $user['pseudo'];
			header('Location: index.php?page='.$_SESSION['redirect_to']);
			exit;
		}
	}
}
function logoutUser() {
	session_destroy();
	header('Location: index.php?page='.$_SESSION['redirect_to']);
	exit;
}

function makeHeader() {
	$html = ['<h4>'];
	if (isAuthenticated()) {
		$html[] = 'Bonjour <b>' . $_SESSION['pseudo'] . '</b> | ';
		$html[] = '<a href="index.php?disconnect=yes">Déconnexion</a>';
	} else {
		$html[] = 'Bonjour invité, cliquez ';
		$html[] = '<a href="index.php?page=login">ici</a>';
		$html[] = ' pour vous identifier';
	}
	$html[] = '</h4>';
	return implode('', $html);
}

