<?php

	session_start();
	setcookie('flag', true, time()-1, '/');
	unset($_SESSION['flag']);
	header('location: ../view/login.html');

?>