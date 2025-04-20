<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contasapagar extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    // Método para inserir uma nova conta a pagar
    public function insert($data) {
        return $this->db->insert('contasapagar', $data);
    }

    // Método para atualizar uma conta a pagar existente
    public function updateContaAPagar($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('contasapagar', $data);
    }

    // Método para deletar uma conta a pagar
    public function deleteContaAPagar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('contasapagar');
    }

    // Método para buscar uma conta a pagar pelo ID
    public function getContaAPagarById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('contasapagar');
        return $query->row();
    }

    // Método para buscar todas as contas a pagar
    public function getAllContasAPagar() {
        $this->db->select('*');
        $this->db->from('contasapagar');
        $this->db->order_by('data_vencimento', 'ASC');  // Ordena por data de vencimento
        $query = $this->db->get();
        return $query->result(); // retorna objetos
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