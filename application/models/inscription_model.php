<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription_model extends CI_Model
{
	public function get_info()
	{

		$SQL = "SELECT * FROM `inscrits`";

		$query = $this->db->query($SQL);

		return $query->result_array();
		
	}


}