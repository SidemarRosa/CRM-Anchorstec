<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kanban_prospect extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Example method to get all prospects
    public function get_all_prospects() {
        $query = $this->db->get('contato_prospect');
        return $query->result_array();
    }

    // Example method to insert a new prospect
    public function insert_prospect($data) {
        return $this->db->insert('contato_prospect', $data);
    }

    // Example method to update a prospect
    public function update_prospect($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('contato_prospect', $data);
    }

    // Example method to delete a prospect
    public function delete_prospect($id) {
        $this->db->where('id', $id);
        return $this->db->delete('contato_prospect');
    }
}