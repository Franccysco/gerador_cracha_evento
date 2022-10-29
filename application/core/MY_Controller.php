<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    private $data = "";
    public function construct()
    {

        parent::__construct();
    }

    public function render_page($view, $data = null)
    {
        $viewdata = (empty($data)) ? $this->$data : $data;

        $this->load->view('template/header', $data);
        $this->load->view($view, $viewdata);
        $this->load->view('template/menu-lateral');
        $this->load->view('template/footer');
    }
}
