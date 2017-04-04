<?php
namespace App\Entity;
use Core\Entity\Entity;

/**
* class pour stocker la table Entity utilisateur
*/
class UtilisateurEntity extends Entity
{
	public function getAge()
	{
		return (int)((time()-strtotime($this->date_de_naissance))/(60*60*24*365));
		//return $this->date_de_naissance;
	}
		public function getIdentity()
	{
		return strtoupper($this->nom). " " .ucfirst($this->prenom);
		//return $this->date_de_naissance;
	}
	public function getAdresseComplete()
	{
		return $this->adresse. ', ' .$this->code_postal;
	}
}