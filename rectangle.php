<?php 
require_once 'exo_POO.php';

class Rectangle extends Forme {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculAire() {
        return $this->longueur * $this->largeur;
    }

    public function calculerPerimetre() {
        return  2 * ($this->longueur * $this->largeur);
    }
}

$rectangle = new Rectangle(8, 4);

$rectangleAire = $rectangle->calculAire();
$rectanglePerimetre = $rectangle->calculerPerimetre();

echo "Rectangle \n";
echo "l'Aire du Rectangle :  $rectangleAire \n";
echo "le perimetre du Rectangle : $rectanglePerimetre \n";

?>