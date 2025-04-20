<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contasapagar extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    // Método para pegar o total de contas a pagar
    public function getTotalContasAPagar() {
        $this->db->select_sum('valor');
      //  $this->db->where('status', 'PENDENTE');  // Filtra apenas as contas a pagar pendentes
        $query = $this->db->get('contasapagar');
        return $query->row()->valor;  // Retorna o total das contas a pagar
    }

    // Método para pegar o total de contas a pagar do mês
    public function getTotalContasAPagarMes() {
        $this->db->select_sum('valor');
        $this->db->where('status', 'PENDENTE');  // Filtra apenas as contas a pagar pendentes
        $this->db->where('MONTH(data_vencimento)', date('m'));  // Filtra pelo mês atual
        $this->db->where('YEAR(data_vencimento)', date('Y'));  // Filtra pelo ano atual
        $query = $this->db->get('contasapagar');
        return $query->row()->valor;  // Retorna o total das contas a pagar no mês
    }


}