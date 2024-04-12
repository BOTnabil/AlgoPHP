<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
</p>

<h2>Résultat</h2>


<?php
//Definition du tableau
$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"];
    


//Affichage
echo afficherTableHTML($capitales);

//Fonction prenant les infos du array et les transforment en tableau HTML
function afficherTableHTML($capitales) {
    ksort($capitales);
    $result="<table border=1>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitales</th>
                    <th>Lien Wiki</th>
                </tr>
            </thead>
        <tbody>";
foreach($capitales as $pays => $capitale) {
    $result .= "<tr>
                    <td>".mb_strtoupper($pays)."</td>
                    <td>$capitale</td>
                    <td><a href='https://fr.wikipedia.org/wiki/$capitale
                    ' target='_blank'>Lien</a></td>
                </tr>";
}
    $result .= "</tbody></table>";
    return $result;
}