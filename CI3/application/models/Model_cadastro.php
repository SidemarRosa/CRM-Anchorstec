<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_cadastro extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Carrega o banco de dados
    }

    // Função para inserir os dados de cadastro
    public function inserir($dados)
    {
        return $this->db->insert('usuarios', $dados); // Insere os dados na tabela 'usuarios'
    }
}
