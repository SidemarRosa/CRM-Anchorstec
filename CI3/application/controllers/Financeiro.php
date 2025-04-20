<?php

class Financeiro extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Carrega o helper de URL para usar redirect()
        $this->load->library('session'); // Carrega a biblioteca de sessão
        $this->load->model('Model_clientes'); // Carrega o model Model_clientes
        $this->load->model('Model_usuario'); // Carrega o model Model_usuario
        $this->load->model('Model_contasapagar'); // Carrega o model Model_contasapagar
        $this->load->model('Model_contasareceber'); // Carrega o model Model_contasareceber
    }
    public function index()
    {
        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/crm/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            // Vendas e compras insights
            $totalContasAReceber = $this->Model_contasareceber->getTotalContasAReceber();
            $totalContasAPagar = $this->Model_contasapagar->getTotalContasAPagar();

            // Recuperando o total de contas a receber de hoje e ontem
            $contasAReceberHoje = $this->Model_contasareceber->getTotalContasAReceberHoje();
            $contasAReceberOntem = $this->Model_contasareceber->getTotalContasAReceberOntem();

            // Calcular o percentual de contas a receber
            $percentualContasareceberHoje = $this->Model_contasareceber->calcularPercentual($contasAReceberHoje, $contasAReceberOntem);

            // Verifique se os valores não são zero antes de calcular o lucro
            $lucro = $totalContasAReceber - $totalContasAPagar;

            // Se lucro for negativo ou inválido, defina como 0
            $lucro = $lucro < 0 ? 0 : $lucro;

            
            // Dados para a view
            $data = [
                'totalContasAReceber' => $totalContasAReceber,
                'totalContasAPagar' => $totalContasAPagar,
                'percentualContasareceberHoje' => $percentualContasareceberHoje,
                'contasAReceberHoje' => $contasAReceberHoje,
                'lucro' => $lucro,
            ];
 
            // Carregar a view e passar os dados
            $this->load->view('view_financeiro',$data);
        }
    }
}
