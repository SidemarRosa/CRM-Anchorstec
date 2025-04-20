<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_cadastro'); // Carrega o Model
        $this->load->library('form_validation'); // Biblioteca para validação
        $this->load->helper('url'); // Helper para redirecionamento
    }

    public function index()
    {
        $this->load->view('view_cadastro'); // Carrega a view de cadastro
    }

    public function processar()
    {
        // Regras de validação
        $this->form_validation->set_rules('nome', 'Nome', 'required|trim');
        $this->form_validation->set_rules('documento', 'CNPJ ou CPF', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[usuarios.email]');
        $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[3]');
        $this->form_validation->set_rules('confirmar_senha', 'Confirmação de Senha', 'required|matches[senha]');

        if ($this->form_validation->run() == FALSE) {
            // Se a validação falhar, recarrega a view com erros
            $this->load->view('view_cadastro');
        } else {
            // Pega os dados do formulário
            $dados = array(
                'nome'      => $this->input->post('nome'),
                'documento' => $this->input->post('documento'),
                'email'     => $this->input->post('email'),
                'senha' => md5($this->input->post('senha'))
            );

            // Insere no banco de dados usando o Model
            if ($this->Model_cadastro->inserir($dados)) {
                // Redireciona para a tela de login
                redirect(base_url('login'));
            } else {
                // Caso falhe, recarrega a página com uma mensagem de erro
                $this->session->set_flashdata('error', 'Erro ao cadastrar. Tente novamente.');
                redirect('cadastro');
            }
        }
    }
}
