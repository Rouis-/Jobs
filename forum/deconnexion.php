<?php
session_start();
session_destroy();
$titre="Déconnexion";
include("./debut.php");
include("./menu.php");

if ($id==0) erreur(ERR_IS_NOT_CO);

echo '<p>Vous etes a present deconnecte <br />
Cliquez <a href="'.htmlspecialchars($_SERVER['HTTP_REFERER']).'">ici</a> 
pour revenir a la page precedente.<br />
Cliquez <a href="./index.php">ici</a> pour revenir a la page principale</p>';
echo '</div></body></html>';
?>