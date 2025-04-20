<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Python extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models, libraries, or helpers here
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
        $this->load->model('Model_python');
        $this->load->library('pagination');
    }

    public function index()
    {
        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/crm/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            // Configuração da paginação

            $data['title'] = 'CRM Anchors - Python';
            $data['page'] = 'Python Empresas Ativas';
            $filtros = [
                'cnpj' => $this->input->get('cnpj'),
                'uf' => $this->input->get('uf'),
                'cnae_fiscal' => $this->input->get('cnae_fiscal'),
                'nome_fantasia' => $this->input->get('nome_fantasia'),
            ];

            $data['empresas'] = [];

            // Só busca se algum filtro foi enviado
            if (!empty($filtros['cnpj']) || !empty($filtros['uf']) || !empty($filtros['cnae_fiscal']) || !empty($filtros['nome_fantasia'])) {
                $data['empresas'] = $this->Model_python->filtrar($filtros);
            }

            $data['filtros'] = $filtros;

            // var_dump($data);
            $this->load->view('header', $data); // cabeçalho da página
            $this->load->view('aside'); // barra lateral da página
            $this->load->view('navbar', $data); // barra de navegação da página
            $this->load->view('view_python', $data); // view principal da página
            $this->load->view('footer'); // rodapé da página
            $this->load->view('scripts'); // scripts da página
        }
    }
}
