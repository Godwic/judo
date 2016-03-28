<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

	public function index()
	{
		$this->load->model('inscription_model');

		$data = array();

		$data['user_info'] = $this->inscription_model->get_info();
		$data['user'] = 'Glosoli';

		$this->load->view('inscription', $data);
	}
}
