<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Participantes extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$dados['titulo'] = 'Participantes';
		$this->render_page("participantes", $dados);
	}

  
}
