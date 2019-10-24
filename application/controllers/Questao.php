<?php
defined('BASEPATH') OR exit('Sem permissão de acesso direto ao Script.');

class Questao extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->helper('funcoes');
		$this->load->model('AdminQuestao_model', 'aqm');
		/*$ci = & get_instance();
		$dados["u_logged_in"] = $ci->session->userdata('u_logged_in');
        if($ci->session->userdata('u_logged_in')!= TRUE || $ci->session->userdata('u_permissao') == "Administrador") {
			$dados['titulo']= ' Login do Sistema';
			$dados['h2'] = ' Login do Sistema';
			set_msg('<p><b> Acesso restrito! Faça login para continuar.</b></p>');
			redirect('Autenticacao/index');
        }*/
	}

	public function index(){
		$dados['questoes'] = $this->aqm->getAllQuestao(); 
		$dados['tipoquestoes'] = $this->aqm->getAllTipoQuestao(); 
		$this->load->view('administracao/admQuestao', $dados);
	}

	public function addQuestao(){
		$this->form_validation->set_rules('editor1C', 'editor1C', 'trim');
		$this->form_validation->set_rules('editor2C', 'editor2C', 'trim');
		$this->form_validation->set_rules('respostaC', 'respostaC', 'trim|required');
		$this->form_validation->set_rules('editor3C', 'editor3C', 'trim');
		$this->form_validation->set_rules('idTipoC', 'idTipoC', 'trim|required');

		$problema = $this->input->post('editor1C');
		$pergunta = $this->input->post('editor2C');
		$resolucao = $this->input->post('editor3C');
		$resposta  = $this->input->post('respostaC');
		$resolucao = $this->input->post('resolucaoC');
		$idTipo = $this->input->post('idTipoC');

		$path = "./assets/imagens/questoes/";

        // verificamos se o diretório existe
        // se não existe criamos com permissão de leitura e escrita
        if ( ! is_dir($path)) {
        	mkdir($path, 0777, $recursive = true);
    	}

        // definimos as configurações para o upload
        // determinamos o path para gravar o arquivo
        $configUpload['upload_path']   = $path;
        // definimos - através da extensão - 
        // os tipos de arquivos suportados
        $configUpload['allowed_types'] = 'png|jpg|jpeg';

        $this->upload->initialize($configUpload);
        $conteudo = "";
        $imagem = "";

        if($this->upload->do_upload('imagem')){
        	$conteudo = $this->upload->data();
			$imagem = base_url() . "assets/imagens/questoes/" . $conteudo['file_name'];	
        }

		$dados['problema'] = $problema;
		$dados['pergunta'] = $pergunta;
		$dados['resposta'] = $resposta;
		$dados['resolucao'] = $resolucao;
		$dados['resolucao'] = $resolucao;
		$dados['idTipo'] = $idTipo;
		$dados['imagem'] = $imagem;

		if ($this->form_validation->run() == FALSE) {
			
			set_msg("Falta campos para preencher!!!");

			$this->load->view('administracao/admQuestao', $dados);

		} else {
			$this->aqm->addQuestao($dados);
			set_msg('Questão cadastrada com sucesso!');
			redirect(base_url('Questao/index'));
		}
	}

	/*public function updateEdital(){
		$this->form_validation->set_rules('numero', 'numero', 'trim|required');
		$this->form_validation->set_rules('descricao', 'descricao', 'trim|required');
		$this->form_validation->set_rules('dataInicio', 'dataInicio', 'trim|required');
		$this->form_validation->set_rules('dataFim', 'dataFim', 'trim|required');
		$this->form_validation->set_rules('idUnidade', 'idUnidade', 'trim|required');

		$idEdital = $this->input->post('idEdital');
		$numero = $this->input->post('numero');
		$descricao = $this->input->post('descricao');
		$dataInicio  = implode('-',array_reverse( explode('/', $this->input->post('dataInicio'))));
		$dataFim = implode('-',array_reverse( explode('/', $this->input->post('dataFim'))));
		$idUnidade = $this->input->post('idUnidade');

		$cadastrado = $this->aem->verifyIfNotExists($nome, $idEdital);

		if ($this->form_validation->run() == FALSE || $cadastrado == TRUE || strtotime($dataInicio) > strtotime($dataFim)) {
			$dados['editais'] = $this->aem->getAllEdital();
			$dados['unidades'] = $this->aum->getAllUnidade();
			$dados['numero'] = $numero;
			$dados['descricao'] = $descricao;
			$dados['dataInicio'] = $dataInicio;
			$dados['dataFim'] = $dataFim;
			$dados['idUnidade'] = $idUnidade;
			
			if($cadastrado==TRUE){
				set_msg("Já existe Edital com este nome cadastrado! Por favor digite outro nome!!!");
			}
			if(strtotime($dataInicio) > strtotime($dataFim)){
				set_msg("Data de término menor que data de início!!!");
			}
			$this->load->view('centEdital_view', $dados);

		} else {
			$dados['numero'] = $numero;
			$dados['descricao'] = $descricao;
			$dados['dataInicio'] = $dataInicio;
			$dados['dataFim'] = $dataFim;
			$dados['idUnidade'] = $idUnidade;
			$this->aem->updateEdital($idEdital, $dados);
			set_msg('Edital atualizado com sucesso!');
			redirect(base_url('Edital_Controller/index'));
		}
	}

	public function deleteEdital($idEdital){
		$dados['editais'] = $this->aem->getAllEdital();
		$this->aem->deleteEdital($idEdital);
		set_msg("Edital excluida com sucesso!!!");
		redirect(base_url('Edital_Controller/index'));
	}*/
	
}