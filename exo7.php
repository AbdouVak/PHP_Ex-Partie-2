<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>


<?PHP
$elements = array(
    "choix1" => "choix1",
    "choix2" => "choix2",
    "choix3" => "choix3"
);

function genererCheckbox($elements){
    $checkbox = "";
    foreach($elements as $choix_nom =>$choix){
        echo  "<input type='checkbox' name='$choix' id='case' /> <label for='case'> $choix_nom</label><br>";
    }
};

genererCheckbox($elements);
?>