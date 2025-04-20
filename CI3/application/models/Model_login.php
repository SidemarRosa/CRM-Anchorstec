<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{
    public function verifica_usuario($email, $senha)
    {
        $this->db->where('email', $email);
        $this->db->where('senha', md5($senha)); // Certifique-se de que a senha no banco está criptografada
        $query = $this->db->get('usuarios');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
