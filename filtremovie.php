<?php
include 'connectiondatabase.php';

$reponse = $bdd->query('SELECT * FROM entities WHERE movies=1');

while ($donnees = $reponse->fetch())
{
	echo $donnees['Thumbnails'];
}

$reponse->closeCursor();

// function movieCarousel(id){
//     $reponse = $bdd->query('SELECT Thumbnails,id FROM entities WHERE movies=1');
    
//     while ($donnees = $reponse->fetch()){
// 	echo $donnees['Thumbnails'] ;
// }

// $reponse->closeCursor();
// }
?>