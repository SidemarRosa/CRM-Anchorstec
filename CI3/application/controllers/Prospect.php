<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prospect extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models, libraries, or helpers here
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
        $this->load->model('Model_empresas');
        $this->load->library('pagination');
    }

    public function index()
    {
        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/crm/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            $config['base_url'] = 'http://localhost/crm/CI3/index.php/Prospect/index';
            $config['total_rows'] = $this->Model_empresas->contar_empresas();
            $config['per_page'] = 5;
            $config['uri_segment'] = 3;
            $config['full_tag_open'] = '<nav><ul class="pagination">';
            $config['full_tag_close'] = '</ul></nav>';
            $config['attributes'] = ['class' => 'page-link'];
            $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close'] = '</span></li>';
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
            $this->pagination->initialize($config);
            $offset = $this->uri->segment(3) ?? 0;
            $data['empresas'] = $this->Model_empresas->buscar_empresas_paginadas($config['per_page'], $offset);
            $data['pagination'] = $this->pagination->create_links();
            $data['title'] = 'CRM Anchors - Prospect';
            $data['page'] = 'Prospect';
            
            $this->load->view('template', $data);
            $this->load->view('view_prospect'); // view principal da página
            $this->load->view('footer'); // rodapé da página
        }
    }
}
