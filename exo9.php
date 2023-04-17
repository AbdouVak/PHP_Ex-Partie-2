<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>


<?PHP
$nomsRadio = array("Monsieur","Madame","Mademoiselle");

function afficherRadio($nomsRadio){
    $checkbox = "";
    foreach($nomsRadio as $titres){
        echo "<input type='radio' name='titre' value='$titres'>$titres<br>";
    }
};


afficherRadio($nomsRadio)
?>