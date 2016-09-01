<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Periodico_model extends CI_Model {

    public function do_insert($dados = NULL) {

        if ($dados != NULL):
            $this->db->insert('periodico', $dados);
            $this->session->set_flashdata('cadastrook', 'Cadastro efetuado com sucesso!');
            redirect('periodico/cadastrar');
        endif;
    }
    
    public function get_periodico_byID($id = NULL){
        $sql = "SELECT * FROM periodico WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }

    public function get_all_byID($id = NULL) {
        $sql = "SELECT * FROM periodico WHERE idusuario = ?";
        $query = $this->db->query($sql, array($id));
        return $query;
    }

    public function do_delete($condicao = NULL) {

        if ($condicao != NULL):
            $this->db->delete('periodico', $condicao);
            $this->session->set_flashdata('excluirok', ' Registro deletado com sucesso!');
            redirect('periodico/organizar');
        endif;
    }

    /*
      public function get_all() {
      return $this->db->get('usuario');
      } */

    public function get_Login($email = NULL, $senha = NULL) {
        $tipo = null;
        if ($email != NULL && $senha != NULL) {
            $sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
            $query = $this->db->query($sql, array($email, $senha));
            if ($query->num_rows() > 0 && $query->num_rows() == 1) {
                $usuario = $query->result()[0];
                $dados = array(
                    'nome' => $usuario->nome,
                    'email' => $usuario->email,
                    'id' => $usuario->id,
                );
            }

            return $dados;
        }
        return false;
    }

    public function do_update($dados = NULL, $condicao = NULL) {
        if ($dados != NULL && $condicao != NULL):
            $this->db->update('periodico', $dados, $condicao);
            $this->session->set_flashdata('edicaook', ' Dados alterado com sucesso!');
            redirect('periodico/organizar');
        endif;
    }

}
