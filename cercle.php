<?php 
require_once 'exo_POO.php';

class Cercle extends Forme {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function calculAire() {
        return pi() * $this->rayon * $this->rayon;
    }

    public function calculerPerimetre() {
        return 2 * pi() * $this->rayon;
    }
}

$cercle = new Cercle(5);

$cercleAire = $cercle->calculAire();
$cerclePerimetre = $cercle->calculerPerimetre();

echo "Cercle \n";
echo "l'Aire du cercle :  $cercleAire \n";
echo "le perimetre du cercle : $cerclePerimetre \n";

?>
