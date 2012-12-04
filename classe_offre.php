<?php

class offre
{
	private $libelle ;
	private $date_deb_prev;
	private $date_fin_prev;
	private $periode_esssai;
	private $nb_pers;

	public function __construct($libelle,$datedebprev,$datefinprev,$periodess,$nbpers)
	{
		$this->libelle=$libelle;
		$this->date_deb_prev=$datedebprev;
		$this->date_fin_prev=$datefinprev;
		$this->periode_esssai=$periodess;
		$this->nb_pers=$nbpers;
	}

	public function GetLibelleOffre()
	{
		return $this->libelle;
	}

	public function GetDateDebutPrevisionnelle()
	{
		return $this->date_deb_prev;
	}

	public function GetDateFinPrevionnelle()
	{
		return $this->date_fin_prev;
	}

	public function GetPeriodeEssai()
	{
		return $this->periode_esssai;
	}

	public function GetNombrePersonne()
	{
		return $this->nb_pers;
	}

	public function ModifyLibelle($newlib)
	{
		$this->libelle=$newlib;
		return true;
	}

	public function ModifyDateDebPrev($newdatedebprev)
	{
		$this->libelle=$newdatedebprev;
		return true;
	}

	public function ModifyDateFinPrev($newdatefinprev)
	{
		$this->libelle=$newdatefinprev;
		return true;
	}

	public function ModifyPeriodEssai($newperiodessai)
	{
		$this->libelle=$newperiodessai;
		return true;
	}

	public function ModifyNbPersonne($newnbpers)
	{
		$this->libelle=$newnbpers;
		return true;
	}

	public function DeleteOffre($libelleoffre)
	{
		//requêtes SQL via PDO
		$success='L\'offre à bien été supprimée';
		return $success;
	}

}

?>