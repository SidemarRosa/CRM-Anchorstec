<?php
class Empresas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_empresas');
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
        // Chave api af7eb9cd5c765f64981846e2bb8193ab592d947c4cfef7672867f8b33c9c3098
    }
    public function index()
    {    // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/crm/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            $data['title'] = 'CRM Anchors - Empresas';
            $data['page'] = 'Empresas';
            $this->load->view('template', $data); // view do template
            $this->load->view('view_empresas', $data); // view principal da página
            $this->load->view('footer'); // rodapé da página
        }
    }
    public function consultar($cnpj)
    {
        $cnpj = preg_replace('/\D/', '', $cnpj); // Remove caracteres não numéricos

        // Verifica se já existe no banco
        $empresa = $this->Model_empresas->get_by_cnpj($cnpj);
        if ($empresa) {
            echo json_encode($empresa);
            return;
        }

        // Consulta na API
        $json = file_get_contents("https://receitaws.com.br/v1/cnpj/{$cnpj}");
        $dados = json_decode($json, true);

        if ($dados['status'] === 'OK') {
            $empresa = [
                'cnpj' => $dados['cnpj'],
                'tipo' => $dados['tipo'],
                'porte' => $dados['porte'],
                'nome' => $dados['nome'],
                'nome_fantasia' => $dados['fantasia'],
                'abertura' => $dados['abertura'],
                'atividade_principal_codigo' => $dados['atividade_principal'][0]['code'],
                'atividade_principal_texto' => $dados['atividade_principal'][0]['text'],
                'natureza_juridica' => $dados['natureza_juridica'],
                'logradouro' => $dados['logradouro'],
                'numero' => $dados['numero'],
                'complemento' => $dados['complemento'],
                'cep' => $dados['cep'],
                'bairro' => $dados['bairro'],
                'municipio' => $dados['municipio'],
                'uf' => $dados['uf'],
                'email' => $dados['email'],
                'telefone' => $dados['telefone'],
                'efr' => $dados['efr'],
                'situacao' => $dados['situacao'],
                'data_situacao' => $dados['data_situacao'],
                'motivo_situacao' => $dados['motivo_situacao'],
                'situacao_especial' => $dados['situacao_especial'],
                'data_situacao_especial' => $dados['data_situacao_especial'],
                'capital_social' => str_replace(',', '.', $dados['capital_social']),
                'simples_optante' => isset($dados['simples']['optante']) ? (int)$dados['simples']['optante'] : 0,
                'simples_data_opcao' => $dados['simples']['data_opcao'],
                'simples_data_exclusao' => $dados['simples']['data_exclusao'],
                'simei_optante' => isset($dados['simei']['optante']) ? (int)$dados['simei']['optante'] : 0,
                'simei_data_opcao' => $dados['simei']['data_opcao'],
                'simei_data_exclusao' => $dados['simei']['data_exclusao'],
                'atualizado_em' => date('Y-m-d H:i:s')
            ];

            $this->Model_empresas->salvar($empresa);
            echo json_encode($empresa);
        } else {
            echo json_encode(['erro' => 'Erro ao consultar CNPJ: ' . $dados['message']]);
        }
    }
}
