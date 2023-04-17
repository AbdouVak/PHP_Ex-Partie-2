<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Résultat</h2>


<?PHP
$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage(string $url,int $nb_repetition){
    while($nb_repetition != 0 ){
        echo "<img src='$url'>";
        $nb_repetition --;
    }
};

repeterImage($url,5)
?>