<?php

class Dashboard extends CI_Controller
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
        $this->load->model('Model_kanban_prospect'); // Carrega o model Model_kanban_prospect
    }
    public function index()
    {   
        // Verificar se o usuário está logado
        if (!$this->session->userdata('logged_in')) {
            redirect('http://localhost/crm/CI3/index.php/Login'); // Redirecionar para login caso o usuário não esteja logado
        } else {
            //dashboard insights
            $clientesHoje = $this->Model_clientes->getClientesHoje();
            $clientesOntem = $this->Model_clientes->getClientesOntem();
            $percentualClientes = $this->Model_clientes->calcularPercentual($clientesHoje, $clientesOntem);
            //total de clientes
            $totalClientes = $this->Model_clientes->getTotalClientes();
            //usuarios isights
            $usuariosHoje = $this->Model_usuario->getUsuariosHoje();
            $usuariosOntem = $this->Model_usuario->getUsuariosOntem();
            $percentualUsuarios = $this->Model_usuario->calcularPercentual($usuariosHoje, $usuariosOntem);
            $usuariosAtivos = $this->Model_usuario->getUsuariosAtivos();
          // Vendas e compras insights
            $totalContasAReceber = $this->Model_contasareceber->getTotalContasAReceber();
            $totalContasAPagar = $this->Model_contasapagar->getTotalContasAPagar();

            // Recuperando o total de contas a receber de hoje e ontem
            $contasAReceberHoje = $this->Model_contasareceber->getTotalContasAReceberHoje();
            $contasAReceberOntem = $this->Model_contasareceber->getTotalContasAReceberOntem();
            $metamensal = $this->Model_contasareceber->getMetaMensal();
            // Calcular o percentual de contas a receber
            $percentualContasareceberHoje = $this->Model_contasareceber->calcularPercentual($contasAReceberHoje, $contasAReceberOntem);
            // metodos de pagamento
            $metodosPagamento = $this->Model_contasareceber->getTotaisPorMetodoPagamento();
            // Verifique se os valores não são zero antes de calcular o lucro
            $lucro = $totalContasAReceber - $totalContasAPagar;

            // Se lucro for negativo ou inválido, defina como 0
            $lucro = $lucro < 0 ? 0 : $lucro;

            // Pegando as vendas por mês para Dashboard
            $vendasPorMes = $this->Model_contasareceber->getVendasPorMes();
            // Meses do ano
            $meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
            //ultimas 2 vendas
            $ultimasVendas = $this->Model_contasareceber->getUltimasVendas();
            //total prospect
            $prospectFeitos = $this->Model_kanban_prospect->getTotalProspect();
            // prospect hoje
            $prospectHoje = $this->Model_kanban_prospect->getProspectHoje();

            // Dados para a view
            $data = [
                'clientesHoje' => $clientesHoje,
                'percentualClientes' => $percentualClientes,
                'totalClientes' => $totalClientes,
                'usuariosHoje' => $usuariosHoje,
                'percentualUsuarios' => $percentualUsuarios,
                'totalContasAReceber' => $totalContasAReceber,
                'totalContasAPagar' => $totalContasAPagar,
                'percentualContasareceberHoje' => $percentualContasareceberHoje,
                'contasAReceberHoje' => $contasAReceberHoje,
                'metaMensal' => $metamensal,
                'metodosPagamento' => $metodosPagamento,
                'lucro' => $lucro,
                'labels' => $meses,
                'vendas' => array_values($vendasPorMes),
                'ultimasVendas' => $ultimasVendas,
                'usuariosAtivos' => $usuariosAtivos,
                'prospectFeitos' => $prospectFeitos,
                'prospectHoje' => $prospectHoje
            ];
 
            // Carregar a view e passar os dados
            $this->load->view('view_dashboard', $data);
            
        }
    }
}
