<?php

header('Content-Type: text/html; Charset=UTF-8');
 
// Connection et sélection de la base de données
$link = mysqli_connect('localhost', 'root', 'ubuntu');
mysqli_select_db('bibliotheque', $link);
 
// Ajustement du jeu de caractères utilisé par le client (PHP)
// Note : ce réglage peut être effectué dans le php.ini (default_charset = "utf-8")
mysqli_set_charset('utf8', $link);
 
// Définition de la requête
$query = 'SELECT nom, prenom FROM auteur';

// Exécution de la requête sur le serveur
$result = mysqli_query($query, $link);
 
?>
 
<html>
  <head>
    <title>Listing des auteurs</title>
  </head>
  <body>
   <h1>Listing des auteurs</h1>
   <table>
     <tr><th>Nom</th><th>Prénom</th></tr>

<?php

// Affichage du résultat de la requête
while ($row = mysqli_fetch_assoc($result)) {
  echo "\t<tr>\n";
  printf("\t\t<td> %s </td>\n", $row['nom']);
  printf("\t\t<td> %s </td>\n", $row['prenom']);
  echo "\t</tr>\n";
}

?>
    </table>
  </body>
</html>
 
<?php
 
// Fermeture de la connexion à la base de données
mysqli_close($link);
 
?>
