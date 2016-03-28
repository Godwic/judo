<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription_model extends CI_Model
{
	public function get_info()
	{
		//	On simule l'envoi d'une requête
		return array('inscrit' => 'Nassim',
			     'date' => '28/03/16',
		             'email' => 'mdr@prout.fr');
	}
}