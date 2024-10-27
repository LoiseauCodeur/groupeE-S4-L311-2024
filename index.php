<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);
?>
<!-- appel du fichier inc.functions.php-->
<?php require_once 'inc/inc.functions.php'; ?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="eng">
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- appel du fichier css -->
		<?php require_once 'inc/inc.css.php'; ?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<?php
					// fonction qui recupere le template de la page
					getPageTemplate(
						//Verifie que le parametre "page" existe
						array_key_exists('page', $_GET) ? $_GET['page'] : null
					);
				?>
				<!--appel du fichier tpl-footer-->
				<?php require_once 'inc/tpl-footer.php'; ?>
			</div>
		<!--appel du fichier js-->
		<?php require_once 'inc/inc.js.php'; ?>

	</body>
</html>