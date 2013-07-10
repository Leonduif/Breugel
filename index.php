<?php include("languages.php"); ?>
<!doctype html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Vakantiehuis &agrave; la Braye</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<nav><?php include('views/' . $language . '/_header.php'); ?></nav>
	</header>
	<div class="main">
		<div class="content">
			<?php include('views/' . $language . '/_home.html'); ?>
		</div>
	</div>
</body>
</html>