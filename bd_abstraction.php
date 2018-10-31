<?php

function connexion_serveur_bd($serveur, $id, $mdp, $bd) {
  $id_connexion = mysqli_connect($serveur, $id, $mdp);
  mysqli_select_db($bd, $id_connexion);
  
  return $id_connexion;
}
 
function deconnexion_serveur_bd($id_connexion) {
  mysqli_close($id_connexion);
}

function set_utf8_bd($id_connexion) {
  mysqli_set_charset('utf8', $id_connexion);
}
 
function requete_bd($requete, $id_connexion) { 
  return mysqli_query($requete, $id_connexion);
}
 
function resultats_fetch_assoc($resultats) {
  return mysqli_fetch_assoc($result, mysqli_ASSOC);
}

?>