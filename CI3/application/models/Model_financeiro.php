<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_financeiro extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session'); // Carrega a biblioteca de sessão
        $this->load->model('Model_clientes'); // Carrega o model Model_clientes
        $this->load->model('Model_usuario'); // Carrega o model Model_usuario
        $this->load->model('Model_contasapagar'); // Carrega o model Model_contasapagar
        $this->load->model('Model_contasareceber'); // Carrega o model Model_contasareceber
    }

}