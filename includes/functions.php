<?php
session_start();

$users = [
	['pseudo' => 'Ben', 'login' => 'ben', 'passwd' => '73675debcd8a436be48ec22211dcf44fe0df0a64'],//ben
	['pseudo' => 'Al', 'login' => 'al', 'passwd' => '2f9ee2b336682012cb445da6f3a0a52c68caf471'],//al
	['pseudo' => 'Admin', 'login' => 'admin', 'passwd' => 'd033e22ae348aeb5660fc2140aec35850c4da997'],//admin
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
		if ($login == $user['login'] && sha1($passwd) == $user['passwd']) {
			$_SESSION['pseudo'] = $user['pseudo'];
			header('Location: index.php?page=page1');
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
	if (isAuthenticated()) {
		include("/partials/header_user.php");
	} else {
		include("/partials/header_guest.php");
	}
}

