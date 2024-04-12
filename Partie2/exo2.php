<h1>Exercice 2</h1>

<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
</p>

<h2>Résultat</h2>


<?php
//Definition du tableau
$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin"
    ,"USA"=>"Washington"
    ,"Italie"=>"Rome"];

//Affichage
echo afficherTableHTML($capitales);

//Fonction prenant les infos du array et les transforment en tableau HTML
function afficherTableHTML($capitales) {
    ksort($pays);
    $result="<table border=1>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitales</th>
                </tr>
            </thead>
        <tbody>";
foreach($capitales as $pays => $capitale) {
    $result .= "<tr>
                    <td>".mb_strtoupper($pays)."</td>
                    <td>$capitale</td>
                </tr>";
}
    $result .= "</tbody></table>";
    return $result;
}