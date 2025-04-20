<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contasareceber extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_contasareceber');
        $this->load->helper('url'); // Load URL helper for redirecting
        $this->load->library('form_validation'); // Load form validation library
        $this->load->library('session'); // Load session library for flashdata messages
    }

    public function index() { 
       $data['title'] = 'CRM Anchors - Contas a Receber';
       $data['page'] = 'Contas a Receber';
       $data['contas'] = $this->Model_contasareceber->getAllContasAReceber();
       $this->load->view('header', $data); // cabeçalho da página
       $this->load->view('aside'); // barra lateral da página
       $this->load->view('navbar', $data); // barra de navegação da página
       $this->load->view('view_contasareceber', $data);
       $this->load->view('footer'); // rodapé da página
       $this->load->view('scripts'); // scripts da página
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
            $this->Model_contasareceber->insertContaAReceber($data);

            // Define uma mensagem de sucesso na sessão
            $this->session->set_flashdata('success', 'Conta a Receber criada com sucesso!');
            redirect('http://localhost/crm/CI3/index.php/contasareceber'); // Redireciona para a página de contas a receber
        } else {
            // Se não houve POST, define uma mensagem de erro
            $this->session->set_flashdata('error', 'Erro ao criar Conta a Pagar!');
            redirect('http://localhost/crm/CI3/index.php/contasareceber'); /// Redireciona para a página de contas a receber
        }

        // Carrega a view
        $this->load->view('view_contasapagar');
    }


    public function edit($id) {
        if ($this->input->post()) {
            $data = [
                'descricao' => $this->input->post('descricao'),
                'valor' => $this->input->post('valor'),
                'data_vencimento' => $this->input->post('data_vencimento')
            ];
            $this->Model_contasareceber->update($id, $data);
            redirect('contasareceber');
        } else {
            $data['conta'] = $this->Model_contasareceber->get($id);
            $this->load->view('contasareceber/edit', $data);
        }
    }

    public function delete($id) {
        $this->Model_contasareceber->delete($id);
        redirect('contasareceber');
    }
}