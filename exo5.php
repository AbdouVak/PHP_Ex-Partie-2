<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?PHP
$nomsInput = array("Nom","Prénom","Ville");

function afficherInput(array $nomsInput){
    foreach($nomsInput as $information){
        echo "$information<br></br>";
        echo "<input type='text'/> <br></br>";
    }
    
};
afficherInput($nomsInput);
?>