<?php

class entreprise
{
	private $nsiret;
	private $rai_soc;
	private $ad1;
	private $ad2;
	private $code_pos;
	private $ville;
	private $telephone;
	private $mail;

	public function __construc($siret,$raisoc,$ad1,$ad2,$cp,$ville,$tel)
	{
		$this->nsiret=$siret;
		$this->rai_soc=$raisoc;
		$this->ad1=$ad1;
		$this->ad2=$ad2;
		$this->code_pos=$cp;
		$this->ville=$ville;
		$this->telephone=$tel;
	}

	public function GetAdresse()
	{
		$ad1=$this->ad1;
		$ad2=$this->ad2;
		$ville=$this->ville;
		$cp=$this->code_pos;
		$adresse=array($ad1,$ad2,$cp,$ville);
		return $adresse;
	}

	public function GetTel()
	{
		return $this->telephone;
	}

	public function GetMail()
	{
		if($this->mail!=null)
		{
			return $this->mail;
		}
		else
		{
			$error="Vous n'avez pas renseigné d'adresse e-mail.";
			return $error;
		}
		
	}

	public function GetRaisonSociale()
	{
		return $this->rai_soc;
	}

	public function AdEmail($email)
	{
		$this->mail=$email;
		return true;
	}

	public function ModifyEmail($newemail)
	{
		$this->mail=$newemail;
		return true;
	}

	private function ModifyAd1($newad1)
	{
		$this->ad1=$newad1;
		return true;
	}

	private function ModifyAd2($newad2)
	{
		$this->ad2=$newad2;
		return true;
	}

	private function ModifyCP($newcp)
	{
		$this->code_pos=$newcp;
		return true;
	}

	private function ModifyVille($newville)
	{
		$this->ville=$newville;
		return true;
	}


	public function ModifyAdresse($newad1,$newad2,$newcp,$newville)
	{
		if(isset($newad1))
		{
			ModifyAd1($newad1;)
		}

		if(isset($newad2))
		{
			ModifyAd2($newad2);
		}

		if(isset($newcp))
		{
			ModifyCP($newcp);
		}

		if(isset($newville))
		{
			ModifyVille($newville);
		}

		return true;
	}
}

?>