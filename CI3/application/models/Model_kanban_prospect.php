<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kanban_prospect extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Example method to gt all prospects
    public function getAllProspects() {
        $query = $this->db->get('contato_prospect');
        return $query->result_array();
    }

    // Example method to insert a new prospect
    public function insert($data) {
        return $this->db->insert('contato_prospect', $data);
    }

    // Example method to update a prospect
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('contato_prospect', $data);
    }

    // Example method to delete a prospect
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('contato_prospect');
    }

    public function getBySituacaoFollowup($etapa) {
        $this->db->where('situacao_followup', $etapa);
        $query = $this->db->get('contato_prospect');
        return $query->result();
    }

    public function getTotalProspect() {
        $this->db->from('contato_prospect');
        return $this->db->count_all_results();
    }

    public function getProspectHoje() {
        $this->db->where('DATE(criado_em) = CURDATE()');
        $query = $this->db->get('contato_prospect');
        return $query->num_rows();
    }  

}