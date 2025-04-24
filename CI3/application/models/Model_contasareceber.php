<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_contasareceber extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Método para inserir uma nova conta a receber
    public function insertContaAReceber($data)
    {
        $this->db->insert('contasareceber', $data);
    }
    // Método para atualizar uma conta a receber
    public function updateContaAReceber($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('contasareceber', $data);  // Retorna TRUE se a atualização for bem-sucedida
    }
    // Método para deletar uma conta a receber
    public function deleteContaAReceber($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contasareceber');  // Retorna TRUE se a deleção for bem-sucedida
    }
    // Método para pegar todas as contas a receber
    public function getAllContasAReceber()
    {
        $this->db->select('*');
        $this->db->from('contasareceber');
        $this->db->order_by('data_vencimento', 'ASC');  // Ordena por data de vencimento
        $query = $this->db->get();
        return $query->result(); // retorna objetos
    }
    // Método para pegar o total de contas a receber
    public function getTotalContasAReceber()
    {
        $this->db->select_sum('valor');
        // $this->db->where('status', 'PENDENTE');  // Filtra apenas as contas a receber pendentes
        $query = $this->db->get('contasareceber');
        return $query->row()->valor ?: 0;  // Retorna 0 caso o valor seja NULL
    }
    // Método para pegar o total de contas a receber no mês atual
    public function getTotalContasAReceberNoMes()
    {
        $this->db->select_sum('valor');
        //  $this->db->where('status', 'PENDENTE');  // Filtra apenas as contas a receber pendentes
        $this->db->where('MONTH(data_vencimento)', date('m'));  // Filtra pelo mês atual
        $this->db->where('YEAR(data_vencimento)', date('Y'));  // Filtra pelo ano atual
        $query = $this->db->get('contasareceber');
        return $query->row()->valor ?: 0;  // Retorna 0 caso o valor seja NULL
    }
    // Método para pegar as vendas por mês para o dashboard
    public function getVendasPorMes()
    {
        $this->db->select("MONTH(data_vencimento) AS mes, COUNT(*) AS vendas");
        $this->db->from('contasareceber');
        //  $this->db->where('status', 'pago');  // Considerando apenas as contas pagas
        $this->db->group_by('MONTH(data_vencimento)');
        $this->db->order_by('MONTH(data_vencimento)');
        $query = $this->db->get();

        // Processando os resultados
        $vendasPorMes = array_fill(1, 12, 0);  // Inicializa o array com 0 para cada mês (1 a 12)

        foreach ($query->result() as $row) {
            $vendasPorMes[$row->mes] = $row->vendas;  // Preenche as vendas para o mês correspondente
        }
        return $vendasPorMes;  // Retorna os dados por mês
    }
    // Método para pegar o total de contas a receber hoje
    public function getTotalContasAReceberHoje()
    {
        $this->db->select_sum('valor');
        $this->db->where('DATE(data_vencimento)', date('Y-m-d'));  // Filtra pela data de hoje
        $query = $this->db->get('contasareceber');
        return $query->row()->valor ?: 0;  // Retorna 0 caso o valor seja NULL
    }
    public function getTotalContasAReceberOntem()
    {
        $this->db->select_sum('valor');
        $this->db->where('DATE(data_vencimento)', date('Y-m-d', strtotime('yesterday')));  // Filtra pela data de ontem
        $query = $this->db->get('contasareceber');
        return $query->row()->valor ?: 0;  // Retorna 0 caso o valor seja NULL
    }
    public function calcularPercentual($valorHoje, $valorOntem)
    {
        if ($valorOntem == 0) {
            return $valorHoje > 0 ? 100 : 0;  // Se ontem foi 0 e hoje é maior que 0, retorna 100%
        }
        return (($valorHoje - $valorOntem) / $valorOntem) * 100;
    }
    // Função para pegar as 2 últimas vendas
    public function getUltimasVendas()
    {
        // Consulta para pegar as 2 últimas contas a receber (vendas)
        $this->db->select('valor, descricao, data_pagamento');
        $this->db->from('contasareceber');
        $this->db->order_by('data_pagamento', 'DESC');
        $this->db->limit(3);
        $query = $this->db->get();

        return $query->result_array();  // Retorna como array
    }

    // Método para pegar a meta mensal
    public function getMetaMensal()
    {
        $metaVendas = 4000;

        // Pega o total de contas a receber do mês atual
        $this->db->select_sum('valor');
        $this->db->where('MONTH(data_vencimento)', date('m'));
        $this->db->where('YEAR(data_vencimento)', date('Y'));
        $query = $this->db->get('contasareceber');

        $totalMes = $query->row()->valor ?: 0;

        // Calcula a porcentagem que falta
        $percentualFaltante = 100 - (($totalMes / $metaVendas) * 100);

        return round(max(0, $percentualFaltante), 2); // Nunca menor que 0

    }
    public function getTotaisPorMetodoPagamento()
    {
        $this->db->select('metodo_pagamento, COUNT(*) as total');
        $this->db->from('contasareceber');
        $this->db->group_by('metodo_pagamento');
        $query = $this->db->get();
        return $query->result_array();
    }
}
