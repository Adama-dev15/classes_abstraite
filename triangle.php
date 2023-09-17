<?php 
require_once 'exo_POO.php';

class Triangle extends Forme {
    private $cote1;
    private $cote2;
    private $cote3;

    public function __construct($cote1, $cote2, $cote3) {
        $this->cote1 = $cote1;
        $this->cote2 = $cote2;
        $this->cote3 = $cote3;
    }

    public function calculAire() {
        return $this->cote1 +  $this->cote2 + $this->cote3;
    }

    public function calculerPerimetre() {
        return $this->cote1 + $this->cote2 + $this->cote3;
    }
}

$triangle = new Triangle(4, 6, 6);


$triangleAire = $triangle->calculAire();
$trianglePerimetre = $triangle->calculerPerimetre();

echo "triangle \n";
echo "l'Aire du triangle :  $triangleAire \n";
echo "le perimetre du triangle : $trianglePerimetre \n";

?>