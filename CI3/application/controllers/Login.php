<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('Model_login');
        date_default_timezone_set('America/Sao_Paulo');
    }
    public function index()
    {
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $senha = $this->input->post('password');

            // Verifica usuário no banco
            $user = $this->Model_login->verifica_usuario($email, $senha);

            if ($user) {
                $this->session->set_userdata([
                    'user_id' => $user->id,
                    'user_name' => $user->nome,
                    'user_email' => $user->email,
                    'logged_in' => true  // Define o estado de login
                ]);

                redirect('http://localhost/crm/CI3/index.php/dashboard');
            } else {
                echo 'Usuário ou senha inválidos';
            }
        }

        $this->load->view('view_login');
    }

    public function logout()
    {
        $this->session->sess_destroy();  // Para destruir a sessão do usuário

        redirect('http://localhost/crm/CI3/index.php/Login');  // Redirecionar para a página de login
    }
}
