<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kanban_Prospect extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary models, libraries, or helpers here
        $this->load->model('Model_kanban_prospect'); // Load your model
        $this->load->helper('url'); // Load URL helper for redirecting
        $this->load->library('session'); // Load session library for flashdata messages
        $this->load->library('form_validation'); // Load form validation library
        $this->load->library('pagination'); // Load pagination library if needed
        $this->load->library('table'); // Load table library if needed
    }

    public function index() {
        // Default method
        $data['title'] = 'CRM Anchors - Kanban Prospecção';
       $data['page'] = 'Kanban - Prospecção';
       $this->load->view('header', $data); // cabeçalho da página
       $this->load->view('aside'); // barra lateral da página
       $this->load->view('navbar', $data); // barra de navegação da página
       $this->load->view('view_kanban_prospect', $data);
       $this->load->view('footer'); // rodapé da página
       $this->load->view('scripts'); // scripts da página
    }

    // Add other methods as needed
}