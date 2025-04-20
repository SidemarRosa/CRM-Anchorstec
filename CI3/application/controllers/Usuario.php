<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_usuario');
    }

    public function index() {
      
    }
    
}