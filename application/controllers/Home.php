<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$dados['titulo'] = 'Home';
		$this->render_page("home", $dados);
	}
}
