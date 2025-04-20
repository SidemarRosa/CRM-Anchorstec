<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        date_default_timezone_set('America/Sao_Paulo');
    }

    public function index()
    {
        // Carregar a view de login
        $this->load->view('view_login');
    }
}
