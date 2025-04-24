<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_clientes extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Example method to get all clients
    public function getTotalClientes() {
        $this->db->from('clientes');
        return $this->db->count_all_results();
    }

    public function getClientesHoje() {
        $this->db->where('DATE(data_cadastro)', date('Y-m-d'));
        return $this->db->count_all_results('clientes');
    }

    public function getClientesOntem() {
        $this->db->where('DATE(data_cadastro)', 'CURDATE() - INTERVAL 1 DAY', false);
        return $this->db->count_all_results('clientes');
    }

    public function calcularPercentual($hoje, $ontem) {
        if ($ontem == 0) {
            return $hoje > 0 ? 100 : 0; // Evitar divisão por zero e considerar casos de hoje > 0
        }
        return (($hoje - $ontem) / $ontem) * 100;
    }
    
}