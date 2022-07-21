<?php
// les fichiers de classes commencent par comnvention avec une majuscule


class Voiture {
	public $marque;
	public $couleur;
	public string $bande;
	public int $nbrRous = 4;

	public function demarage() {
	    echo "La voiture démarre lentenement";
	}
}
