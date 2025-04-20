<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contasapagar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models, libraries, or helpers here
        $this->load->model('Model_contasapagar');
        $this->load->helper('url'); // Load URL helper for redirecting
        $this->load->library('form_validation'); // Load form validation library
        $this->load->library('session'); // Load session library for flashdata messages
    }

    public function index()
    {
        // Default method to load the view
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/crm/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            $data['title'] = 'CRM Anchors - Contas a Pagar';
            $data['page'] = 'Contas a Pagar';

            $data['contas'] = $this->Model_contasapagar->getAllContasAPagar();
            $this->load->view('header', $data); // cabeçalho da página
            $this->load->view('aside'); // barra lateral da página
            $this->load->view('navbar', $data); // barra de navegação da página
            $this->load->view('view_contasapagar', $data);
            $this->load->view('scripts'); // scripts da página
            $this->load->view('footer'); // rodapé da página
        }
    }

    public function create()
    {
        // Verifica se o formulário foi enviado
        if ($this->input->post()) {
            
            // Recupera o ID do usuário logado
            $id_usuario = $this->session->userdata('user_id'); // Altere 'user_id' para o nome correto do índice na sua sessão

            // Adiciona o ID do usuário aos dados
            $data['id_usuario'] = $id_usuario;

            // Recupera os dados do formulário// Recupera os dados do formulário
            $data = $this->input->post();

            // Insere os dados no banco
            $this->Model_contasapagar->insert($data);

            // Define uma mensagem de sucesso na sessão
            $this->session->set_flashdata('success', 'Conta a Pagar criada com sucesso!');
            redirect('http://localhost/crm/CI3/index.php/contasapagar'); // Redireciona para a página de contas a pagar
        } else {
            // Se não houve POST, define uma mensagem de erro
            $this->session->set_flashdata('error', 'Erro ao criar Conta a Pagar!');
            redirect('http://localhost/crm/CI3/index.php/contasapagar'); /// Redireciona para a página de contas a pagar
        }

        // Carrega a view
        $this->load->view('view_contasapagar');
    }


    public function edit($id)
    {
        // Method to handle editing of records
        if ($this->input->post()) {
            $this->Model_contasapagar->update($id, $this->input->post());
            redirect('contasapagar');
        }
        $data['conta'] = $this->Model_contasapagar->get($id);
        $this->load->view('contasapagar/edit', $data);
    }

    public function delete($id)
    {
        // Method to handle deletion of records
        $this->Model_contasapagar->delete($id);
        redirect('contasapagar');
    }
}
