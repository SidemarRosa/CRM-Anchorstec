<?php

class Tabelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Carrega o helper de URL para usar redirect()
        $this->load->library('session'); // Carrega a biblioteca de sessão
    }
    public function index()
    {
        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/crm/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            $this->load->view('view_tabelas');
        }
    }
}
