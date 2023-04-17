<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.</p>

<h2>Résultat</h2>

<?PHP
$elements = array("Monsieur","Madame","Mademoiselle");
function alimenterListeDeroulante($elements):string{
    $choix ="";
    foreach($elements as $titres ){

        $choix = $choix . "<option value='$titres'>$titres</option>";
    }
    $select = "<select name='choix'> $choix</select>";
    return $select;
};

echo alimenterListeDeroulante($elements);
?>