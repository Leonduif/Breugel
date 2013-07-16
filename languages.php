<?php
	session_start();
	$language = "nl";

	// Stel standaard taal in (indien deze nog niet is ingesteld)
	if(isset($_SESSION['language']) === false)
	{
	    $_SESSION['language'] = 'nl';
	}

	if(isset($_GET['language'])) // Kijk of de gebruiker de taal wil wijzigen
	{
	    $language= strtolower(trim($_GET['language']));

	    if(in_array($language, array('nl', 'de', 'en', 'fr'))) // Kijk of de taal beschikbaar is binnen deze website
	    {
	        $_SESSION['language'] = $language;
	    }
	}

	// Navigation names
	$home = array('nl' => 'Home',
				  'en' => 'Home',
				  'fr' => 'La home!',
				  'de' => 'Hause');

	switch ($language) {
		case 'nl':
			$navHome = $home['nl'];
			break;

		case 'en':
			$navHome = $home['en'];
			break;

		case 'fr':
			$navHome = $home['fr'];
			break;

		case 'de':
			$navHome = $home['de'];
			break;
		
		default:
			$navHome = $home['nl'];
			break;
	}
?>