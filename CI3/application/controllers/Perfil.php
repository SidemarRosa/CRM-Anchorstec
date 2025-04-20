<?php

class Perfil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Carregar o modelo de usuário
        $this->load->model('Model_usuario');
        $this->load->helper('url'); // Carrega o helper de URL para usar redirect()
        $this->load->library('session'); // Carrega a biblioteca de sessão
    }
    public function index()
    {

        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/crm/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            // Obter o id do usuário (deve ser definido de acordo com a sua lógica de login)
            $user_id = $this->session->userdata('user_id');

            // Carregar o modelo
            $this->load->model('Model_usuario');

            // Obter os dados do usuário com base no ID
            $dados['usuario'] = $this->Model_usuario->getUsuarioById($user_id);

            // Verificar se o usuário foi encontrado
            if ($dados['usuario']) {
                // Carregar a view passando os dados do usuário
                $this->load->view('view_perfil', $dados);
            } else {
                // Se não encontrar, redirecionar ou exibir uma mensagem de erro
                show_error('Usuário não encontrado!');
            }
        }
    }
}
