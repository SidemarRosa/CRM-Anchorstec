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
        $this->load->model('Model_kanban_prospect'); // Supondo que esse seja o model do kanban
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
    public function insertKanban($id_empresa)
    {
        $this->load->model('model_kanban_prospect');
        $this->load->model('model_empresas');

        $empresa = $this->Model_python->get_by_id($id_empresa);

        if ($empresa) {
            // Tratar telefone
            $telefone = $empresa->telefone_1 ?? $empresa->telefone_2;
            $telefone = rtrim((string) $telefone, '.0');
            $telefone = preg_replace('/\D/', '', $telefone);
            $ddd = isset($empresa->ddd_1) ? (int) $empresa->ddd_1 : (isset($empresa->ddd_2) ? (int) $empresa->ddd_2 : '');
            $telefoneCompleto = $ddd . $telefone;

            $data = [
                'id_empresa' => $empresa->id,
                'nome_fantasia_empresa' => $empresa->nome_fantasia ?? null,
                'cnpj_empresa' => $empresa->cnpj,
                'status_empresa' => 'Ativo',
                'telefone_wpp_empresa' => $telefoneCompleto,
                'cnae_principal_empresa' => $empresa->cnae_fiscal,
                'cnae_secundario_empresa' => $empresa->cnae_fiscal_secundario ?? null,
                'abordagem_contato_empresa' => 'Prospecção',
                'id_usuario' => $this->session->userdata('user_id'),
                'primeiro_contato' => date('Y-m-d H:i:s'),
                'proximo_contato' => date('Y-m-d H:i:s', strtotime('+7 days')),
                'ultimo_followup' => date('Y-m-d H:i:s'),
                'motivo_followup' => 'Prospecção',
                'situacao_followup' => 'Prospecção fria',
                'criado_em' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s'),
            ];

            $this->model_kanban_prospect->insert($data);
            $this->session->set_flashdata('success', 'Empresa adicionada ao Kanban com sucesso!');
            redirect('http://localhost/crm/CI3/index.php/kanban_prospect'); // Redirecionar para a página do kanban
        } else {
            show_404();
        }
    }
}
