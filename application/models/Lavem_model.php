<?php if(!defined('BASEPATH')){ exit('Sem permissão de acesso direto ao Script.'); }

class Lavem_model extends CI_Model{

        /**
         * Método contrutor
         */
        public function __construct() {

            parent::__construct();
            $this->load->model('Lavem_model','lm');
        }

        public function GetAll($tabela = NULL) {

            $this->db->select('*');
            $this->db->from($tabela);

            return $this->db->get()->result();
        }
        
        public function Add($dados = NULL, $tabela = NULL) {

            return $this->db->insert($tabela, $dados_usuario);
        }

        public function GetById($id = NULL, $tabela = NULL) {

            $this->db->select('*');
            $this->db->from($tabela);
            $this->db->where('id', $id);

            return $this->db->get()->result()[0];
        }

        public function Update($id = NULL, $dados = NULL, $tabela = NULL) {

            $this->db->where('id', $id);
            $this->db->update($tabela, $dados);

            return TRUE;
        }

        public function Delete($id = NULL, $tabela = NULL) {

            $this->db->where('id', $id);
            $this->db->delete($tabela);

            return TRUE;
        }
    }
