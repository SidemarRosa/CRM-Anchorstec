<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tables extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database library
        $this->load->database();
    }

    // Example method to fetch all records from a table
    public function get_all($table) {
        $query = $this->db->get($table);
        return $query->result_array();
    }

    // Example method to insert data into a table
    public function insert($table, $data) {
        return $this->db->insert($table, $data);
    }

    // Example method to update data in a table
    public function update($table, $data, $where) {
        return $this->db->update($table, $data, $where);
    }

    // Example method to delete data from a table
    public function delete($table, $where) {
        return $this->db->delete($table, $where);
    }
}