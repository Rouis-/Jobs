<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=forum', 'root', 'fastlap50');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage() . "\n");
}
?>
