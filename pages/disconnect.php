<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);?>
<?php
	require_once "./inc/inc.functions.php";
	setDisconnectUser();

	header('Location:index.php');
?>