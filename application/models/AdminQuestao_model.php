<?php if(!defined('BASEPATH')){ exit('Sem permissão de acesso direto ao Script.'); }

class AdminQuestao_model extends CI_Model{
  public function __construct() {
    parent::__construct();
    $this->load->model('AdminQuestao_model','aqm');
  }

  public function addQuestao($dados = NULL) {
    return $this->db->insert('questao', $dados);
  }

  public function getAllQuestao() {
    $this->db->select('*');
    $this->db->from('questao');
    return $this->db->get()->result();
  }

  public function getAllTipoQuestao() {
    $this->db->select('*');
    $this->db->from('tipoquestao');
    return $this->db->get()->result();
  }

  public function updateQuestao($id = NULL, $dados = NULL) {
    $this->db->where('idQuestao', $id);
    $this->db->update('questao', $dados);
    return TRUE;
  }

  public function deleteQuestao($id = NULL) {
    $this->db->where('idQuestao', $id);
    $this->db->delete('questao');
    return TRUE;
  }

}
