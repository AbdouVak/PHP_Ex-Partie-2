<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.</p>

<h2>Résultat</h2>


<?PHP

class Voiture{
    private string $_marque;
    private string $_modele;
    private string $_nbPortes;
    private int $_vitesseActuelle = 0;
    private string $_voitureAllumer = "eteint";

    function __construct(string $marque, string $modele,int $nbPortes)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;

    }

    public function getMarque(){return  $this->_marque;}
    public function setMarque(string  $marque){ $this->_marque = $marque;} 

    public function getmodele(){return  $this->_modele;} 
    public function setmodele(string  $modele){ $this->_marque = $modele;} 

    public function getNbPortes(){return  $this->_nbPortes;} 
    public function setNbPortes(string  $nbPortes){ $this->_marque = $nbPortes;} 

    public function demarrer(){
        echo "Le véhicule $this->_marque  $this->_modele démarre<br>";
        $this->_voitureAllumer = "allumer";
    }

    public function accelerer(int $_vitesse){
        if($this->_voitureAllumer == "eteint"){
            echo "Le véhicule $this->_marque  $this->_modele veut accélère de $_vitesse km / h <br>";
            echo "Pour accélerer, il faut demarrer le véhicule  $this->_marque  $this->_modele<br>";
        }else{
            $this->_vitesseActuelle = strval($this->_vitesseActuelle + $_vitesse);
            echo "Le véhicule $this->_marque  $this->_modele accélère de $_vitesse km / h <br>";            
        }
    }

    public function vitesseVoiture(){echo "La vitesse véhicule $this->_marque  $this->_modele est de $this->_vitesseActuelle km / h <br>";}

    public function stopper(){
        echo "Le véhicule $this->_marque  $this->_modele s'arrete <br>";
        $this->_voitureAllumer = "eteint";
        
    }

    public function ralentir(int $_vitesse){        
        if($this->_voitureAllumer == "eteint"){
            echo "Le véhicule $this->_marque  $this->_modele veut déccélère de $_vitesse km / h <br>";
            echo "Pour déccélèrer, il faut demarrer le véhicule  $this->_marque  $this->_modele<br>";
        }else{
            $this->_vitesseActuelle = $this->_vitesseActuelle - $_vitesse;
            echo "Le véhicule $this->_marque  $this->_modele déccélère de $_vitesse km / h <br>";
        }
    }

    public function infoVehicule(){
        echo "<br>";
        echo "Info véhicule  <br>";
        echo "****************************<br>";
        echo "Nom de modèle du véhicule: $this->_marque  $this->_modele<br>";
        echo "Nombre de portes: $this->_nbPortes<br>";
        echo "le véhicule $this->_marque est $this->_voitureAllumer <br>";
        echo "Sa vitesse actuelle est de $this->_vitesseActuelle<br>";
    }

}
$V1 = new Voiture("Peugeot","408",5);
$V2 = new Voiture("Citroën","C4",3);

$V1->demarrer();
$V1->vitesseVoiture();
$V1->accelerer(50);
$V1->vitesseVoiture();
$V1->ralentir(30);
$V1->vitesseVoiture();
$V1->stopper();
$V1->accelerer(50);
$V1->ralentir(30);
$V1->vitesseVoiture();
$V1->infoVehicule();

echo "<br>";

$V2->demarrer();
$V2->vitesseVoiture();
$V2->accelerer(50);
$V2->vitesseVoiture();
$V2->ralentir(30);
$V2->vitesseVoiture();
$V2->stopper();
$V2->accelerer(50);
$V2->ralentir(30);
$V2->vitesseVoiture();
$V2->infoVehicule();
?>