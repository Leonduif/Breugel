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
?>