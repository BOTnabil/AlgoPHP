<h1>Exercice 15</h1>


<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.
</p>

<h2>Résultat</h2>

<?php
$email = "contact@elan";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("L'adresse <strong>$email</strong> est une adresse e-mail valide<br>");
} else {
  echo("L'adresse <strong>$email</strong> est une adresse e-mail invalide<br>");
}