<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Periodico extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->model('Periodico_model', "PeriodicoDAO");
    }

    public function cadastrar() {
        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required|max_length[200]');
        $this->form_validation->set_rules('autores', 'Autores', 'trim|required|max_length[500]');
        $this->form_validation->set_rules('resumo', 'Resumo', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('problema', 'Problema', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('objetivo', 'Objetivo', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('teorico', 'Teórico', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('metodo', 'Método', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('desenvolvimento', 'Desenvolvimento', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('resultado', 'Resultado', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('analise', 'Analise do resultado', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('conclusao', 'Conclusão', 'trim|required|max_length[65000]');
        $this->form_validation->set_rules('pforte', 'Pontos Fortes', 'trim|max_length[65000]');
        $this->form_validation->set_rules('pfraco', 'Pontos Fracos', 'trim|max_length[65000]');


        if ($this->form_validation->run()):
            $dados = elements(array('titulo', 'autores', 'resumo', 'problema', 'objetivo', 'teorico', 'metodo', 'desenvolvimento', 'resultado', 'analise', 'conclusao', 'pforte', 'pfraco'), $this->input->post());
            $idusuario = $this->session->id;
            $dados['idusuario'] = $idusuario;
            $this->PeriodicoDAO->do_insert($dados);
        endif;

        $dados = array(
            'titulo' => 'SGAP',
            'tela' => 'periodico/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function consultar()
    {
            $periodicos = $this->PeriodicoDAO->get_all_byID($this->session->id);
            if($periodicos != NULL):
            $dados = array(
                'titulo' => 'SGAP',
                'tela' => 'periodico/consultar',
                'periodico' => $periodicos,
            );
            $this->load->view("exibirDados", $dados);
            else:
            redirect('inicio/');
        endif;
    }

}
