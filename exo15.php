<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.</p>

<h2>Résultat</h2>


<?PHP
$emails = array("elan@elan-formation.fr", "contact@elan");



foreach($emails as $email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("L'addresse $email est une addresse e-mail valide<br>");
    } else {
        echo("L’adresse $email est une adresse e-mail invalide<br>");
    }
}
?>