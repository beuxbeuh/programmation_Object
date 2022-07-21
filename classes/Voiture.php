<?php
// les fichiers de classes commencent par convention avec une majuscule


class Voiture {
	private $marque;
	private $couleur;
	public int $nbrRous = 4;

	public function __construct(string $couleur, string $marque)
	{
	    $this->couleur = $couleur;
	    $this->marque = $marque;
	}

	public function get_mark(): string
	{
	     return $this->marque; // Méthod pour obtenir la marque de la voiture
	}

	public function set_mark(string $marque): void
	{
	     $this->marque = $marque; // Méthod pour definir la marque de la voiture
	}

	public function get_color(): string
	{
	    return $this->couleur;
	}

	public function set_color(string $couleur): void
	{
	    $this->couleur = $couleur;
	}

	public function demarage(): void
	{
	    echo "La voiture démarre lentement";
	}

	public function affichageCouleur():string
	{
	    return '<p>La voiture est de couleur ' . $this->get_color() . '</p>';
	}
	public function __destruct()
	{
	    
	}
}
