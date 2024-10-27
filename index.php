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
		<?php require_once 'inc/inc.css.php'; ?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<?php
					getPagesTemplate(
						array_key_exists('page', $_GET) ? $_GET['page'] : null
					);
				?>
				<?php require_once 'inc/tpls-footer.php'; ?>
			</div>

		<?php require_once 'inc/inc.js.php'; ?>

	</body>
</html>