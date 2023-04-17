<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</p>

<h2>Résultat</h2>


<?PHP

function formaterDateFr($date){
    $jour_anglais = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
    $jour_francais = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    $mois_anglais = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Déc');
    $mois_francais = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    $date = date('D d M Y', strtotime($date));
    $date = str_replace($jour_anglais,$jour_francais,$date);
    $date = str_replace($mois_anglais,$mois_francais,$date);
    
    return  $date;

};

$date = '2017-07-05';

echo formaterDateFr($date);

?>