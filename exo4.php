<h1>Exercice 4</h1>

<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.</p>

<h2>Résultat</h2>
<style>

td,
th {

    padding-left: 10px;
    padding-right: 10px;

}

table {
    border-collapse: collapse;
    border: 1px solid black;
}

</style>

<br></br>
<?PHP

$capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
);

function afficherTableHTML($capitales){
    ksort($capitales);
    $colonne = "";

    foreach($capitales as $Pays => $capital){
        $Pays = strtoupper($Pays);
        $lignes1 =  "<td>$Pays </td>";        
        $lignes2 =  "<td>$capital </td>";
        $lignes3 = "<td><a href='https://fr.wikipedia.org/wiki/$capital' target='_blank'>lien</a></td>";
        $colonne = $colonne."<tr>$lignes1 $lignes2 $lignes3</tr>";
    }

    $table = "<table border='1px'>
    <th align='left'>Pays</th> 
    <th align='left'>Capital</th>
    <th align='left'>Lien wiki</th> 
    $colonne
    </table>";
    
    return $table;
}

echo afficherTableHTML($capitales);
?>