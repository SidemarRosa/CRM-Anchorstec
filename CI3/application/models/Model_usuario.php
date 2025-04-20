<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_usuario extends CI_Model
{
    //contrutor
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // Método exemplo para obter todos os usuários
    public function getAllUsers()
    {
        $query = $this->db->get('usuarios');
        return $query->result();
    }
    // Método para obter um usuário pelo ID
    public function getUsuarioById($id)
    {
        // Verificar se o ID é válido
        if ($id) {
            $query = $this->db->get_where('usuarios', array('id' => $id));
            return $query->row();  // Retorna uma linha ou NULL
        }
        return NULL;  // Retorna NULL se o ID não for válido
    }
    // Método exemplo para atualizar um usuário
    public function atualizarUsuario($id, $dados)
    {
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $dados);
    }
    // Método exemplo para deletar um usuário
    public function deletarUsuario($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('usuarios');
    }
    // adicionar usuario
    // Método exemplo para verificar usuarios cadastrados hoje
    public function getUsuariosHoje() {
        $this->db->where('DATE(data_criacao) = CURDATE()', null, false);
        return $this->db->count_all_results('usuarios');
    }
    // Método exemplo para verificar usuarios cadastrados ontem
    public function getUsuariosOntem() {
        $this->db->where('DATE(data_criacao) = CURDATE() - INTERVAL 1 DAY', null, false);
        return $this->db->count_all_results('usuarios');
    }
    // Método exemplo para calcular percentual de usuarios cadastrados
    public function calcularPercentual($hoje, $ontem) {
        if ($ontem == 0) return $hoje > 0 ? 100 : 0; // Evitar divisão por zero
        return (($hoje - $ontem) / $ontem) * 100;
    }
    public function getUsuariosAtivos() {
        $this->db->where('ativo', '1');
        return $this->db->count_all_results('usuarios');
    }
}
?>