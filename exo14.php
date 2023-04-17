<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.</p>

<h2>Résultat</h2>


<?PHP


class Voiture{
    private $_marque;
    private $_modele;

    function __construct(string $marque, string $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;

    }

    public function getInfos(): string{
        return ($this->_marque ." ". $this->_modele);
    }
}

class VoitureElec extends Voiture{
    private $_autonomie;

    function __construct(string $marque, string $modele,int $autonomie)
    {
        parent::__construct($marque,$modele);
        $this->_autonomie = $autonomie;
    }

    public function getInfos():string{
        return parent::getInfos()." ".$this->_autonomie;
    }   
    
}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";
?>