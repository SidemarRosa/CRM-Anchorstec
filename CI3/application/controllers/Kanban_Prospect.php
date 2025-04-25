<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kanban_Prospect extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kanban_prospect');
        $this->load->library('session');

    }
    public function index()
    {
        $data['title'] = 'CRM Anchors - Kanban Prospecção';
        $data['page'] = 'Kanban - Prospecção';

        // Etapas do funil
        $data['etapas'] = [
            'Prospecção Fria',
            'Follow-up 1',
            'Follow-up 2',
            'Lead Quente',
            'Follow-up Proposta Enviada',
            'Nutrição',
            'Reativação'
        ];

        // Agrupa empresas por etapa
        $data['empresas_por_etapa'] = [];
        foreach ($data['etapas'] as $etapa) {
            $data['empresas_por_etapa'][$etapa] = $this->Model_kanban_prospect->getBySituacaoFollowup($etapa);
        }

        // Views
        $this->load->view('header', $data);
        $this->load->view('aside');
        $this->load->view('navbar', $data);
        $this->load->view('view_kanban_prospect', $data);
        $this->load->view('footer');
        $this->load->view('scripts');
    }

    public function atualizar_etapa()
    {
        $id = $this->input->post('id');
        $etapa = $this->input->post('etapa');

        if ($id && $etapa) {
            $this->db->where('id_contato_prospect', $id);
            $this->db->update('contato_prospect', [
                'situacao_followup' => $etapa,
                'update_at' => date('Y-m-d H:i:s')
            ]);
            echo json_encode(['status' => 'ok']);
        } else {
            echo json_encode(['status' => 'erro']);
        }
    }


    // Add other methods as needed
}
