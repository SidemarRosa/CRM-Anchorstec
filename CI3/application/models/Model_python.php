<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_python extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_empresas($limit = 20, $offset = 0)
  {
    $this->db->limit($limit, $offset);
    $query = $this->db->get('empresas_ativas');
    return $query->result();
  }

  public function filtrar($filtros)
  {
    if (!empty($filtros['cnpj'])) {
      $this->db->like("CONCAT(cnpj_basico, cnpj_ordem, cnpj_dv)", $filtros['cnpj']);
    }

    if (!empty($filtros['uf'])) {
      $this->db->where('uf', $filtros['uf']);
    }

    if (!empty($filtros['cnae_fiscal'])) {
      $this->db->like('cnae_fiscal', $filtros['cnae_fiscal']);
    }

    if (!empty($filtros['nome_fantasia'])) {
      $this->db->like('nome_fantasia', $filtros['nome_fantasia']);
    }

    return $this->db->limit(100)->get('empresas_ativas')->result();
  }
}
