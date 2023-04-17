<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet »</p>

<h2>Résultat</h2>


<?PHP
$information_perso = array("Nom","Prénom","addresse e-mail","Ville","sexe");
$formation = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");

function afficherInput(array $information_perso,array $formation){
    
    $info_perso_container = "";
    $formation_container = "";

    foreach($information_perso as $information){
        echo "$information</br>";
        $info_perso_container = $info_perso_container ."<input type='text'/> <br></br>";
    }

    foreach($formation as $titres){
        $formation_container = $formation_container . "<input type='radio' name='titre' value='$titres'>$titres<br>";
    }
    echo "<form method='get'>
            $info_perso_container<br>
            $formation_container<br>
            <br><input type='submit' value='Envoyer le formulaire'>";

};


afficherInput($information_perso,$formation);

?>