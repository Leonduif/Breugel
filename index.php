<?php 
	$current = basename(dirname($_SERVER['PHP_SELF']));
	include("languages.php"); 
?>
<!doctype html>
<html lang="<?=$language;?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>R&eacute;sidence &agrave; la Braye - <?=$current;?></title>
	<link rel="stylesheet" href="/assets/css/<?=$current;?>.css">
	<!--[if lt IE 9]>
	<script src="dist/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<nav>
			<div class="center">
				<ul class="mainNav">
					<li><a href="/views/<?=$language;?>/home/home.php"<?php if ($current == "home") echo " class='active'";?>><?=$navHome;?></a></li>
					<li><a href="/views/<?=$language;?>/indeling/indeling.php"<?php if ($current == "indeling") echo " class='active'";?>>Indeling</a></li>
					<li><a href="/views/<?=$language;?>/omgeving/omgeving.php"<?php if ($current == "omgeving") echo " class='active'";?>>Omgeving</a></li>
					<li><a href="/views/<?=$language;?>/fotos/fotos.php"<?php if ($current == "fotos") echo " class='active'";?>>Foto's</a></li>
					<li><a href="/views/<?=$language;?>/contact/contact.php"<?php if ($current == "contact") echo " class='active'";?>>Contact &amp; prijzen</a></li>
				</ul>
				<ul class="subNav">
					<li><a href="?language=de" hreflang='de'<?php if ($language == "de") echo " class='active'";?>></a></li>
					<li><a href="?language=fr" hreflang='fr'<?php if ($language == "fr") echo " class='active'";?>></a></li>
					<li><a href="?language=en" hreflang='en'<?php if ($language == "en") echo " class='active'";?>></a></li>
					<li><a href="?language=nl" hreflang='nl'<?php if ($language == "nl") echo " class='active'";?>></a></li>
				</ul>
			</div>
		</nav>
	</header>
	<?php include ("$current-$language.php"); ?>
	<footer>
		<div class="center">
			<div class="col-1-3">
				<ul class="mainNavFooter">
					<li><a href="/views/<?=$language;?>/home/home.php"<?php if ($current == "home") echo " class='active'";?>><?=$navHome;?></a></li>
					<li><a href="/views/<?=$language;?>/indeling/indeling.php"<?php if ($current == "indeling") echo " class='active'";?>>Indeling</a></li>
					<li><a href="/views/<?=$language;?>/omgeving/omgeving.php"<?php if ($current == "omgeving") echo " class='active'";?>>Omgeving</a></li>
					<li><a href="/views/<?=$language;?>/fotos/fotos.php"<?php if ($current == "fotos") echo " class='active'";?>>Foto's</a></li>
					<li><a href="/views/<?=$language;?>/contact/contact.php"<?php if ($current == "contact") echo " class='active'";?>>Contact &amp; prijzen</a></li>
				</ul>
			</div>
			<div class="col-2-3 contact">
				<p> R&eacute;sidence &agrave; la Braye</p>
				<address>
					<ul>
						<li>St.Aubin de Nabirat</li>
						<li>Frankrijk, Dordogne</li>
						<li><a href="mailto:alabraye@gmail.com">alabraye@gmail.com</a></li>
					</ul>
				</address>
			</div>
		</div>
	</footer>
</body>
</html>