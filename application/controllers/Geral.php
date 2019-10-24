<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function indexAdm()
	{
		$this->load->view('administracao/homeAdm');
	}

	public function projetos(){
		$this->load->view('paginas/projetos');
	}
	
	
	public function hist_da_mat () {
		$this->load->view('paginas/hist_da_mat');		
		
	}
	public function cinemat1 () {
		$this->load->view('paginas/cinemat1');		
		
	}
	
	public function cinemat2() {
		$this->load->view('paginas/cinemat2');		
		
	}
	
	public function cinemat3() {
		$this->load->view('paginas/cinemat3');		
		
	}
	
	public function cinemat4() {
		$this->load->view('paginas/cinemat4');		
		
	}
	
	
	public function cinemat5() {
		$this->load->view('paginas/cinemat5');		
		
	}
	
	public function cinemat6() {
		$this->load->view('paginas/cinemat6');		
		
	}
	
	public function cinemat7() {
		$this->load->view('paginas/cinemat7');		
		
	}
	
	public function cinemat8() {
		$this->load->view('paginas/cinemat8');		
		
	}
	
	
	public function cinemat9() {
		$this->load->view('paginas/cinemat9');		
		
	}
	
	public function cinemat10() {
		$this->load->view('paginas/cinemat10');		
		
	}
	public function cinemat11() {
		$this->load->view('paginas/cinemat11');		
		
	}
	
	public function cinemat12() {
		$this->load->view('paginas/cinemat12');		
		
	}
	public function cinemat13() {
		$this->load->view('paginas/cinemat13');		
		
	}
	public function cinemat14() {
		$this->load->view('paginas/cinemat14');		
		
	}
	public function apresentacao_J() {
		$this->load->view('paginas/apresentacao_J');		
		
	}
	
	public function jogos() {
		$this->load->view('paginas/jogos');		
		
	}
	
	public function jogospegavaretas() {
		$this->load->view('paginas/jogospegavaretas');		
		
	}
	
	public function pegavaretas() {
		$this->load->view('paginas/pegavaretas');		
		
	}
	
	public function pegavaretasinteiro() {
		$this->load->view('paginas/pegavaretasinteiro');		
		
	}
	public function pegavaretastrigom() {
		$this->load->view('paginas/pegavaretastrigom');		
		
	}
	/*
		inserido por luis felipe
	*/
	public function labirintosdecimais(){
		$this->load->view("paginas/labirintosdecimais");
	}
	
	public function ensino_fundamental() {
		$this->load->view('paginas/ensino_fundamental');		
		
	}
	
	public function obj_afim_fund() {
		$this->load->view('paginas/obj_afim_fund');		
		
	}
	public function obj_quadratica_fund() {
		$this->load->view('paginas/obj_quadratica_fund');		
		
	}


	
	
	public function ensino_medio() {
		$this->load->view('paginas/ensino_medio');		
		
	}
	
	public function obj_afim_medio() {
		$this->load->view('paginas/obj_afim_medio');		
		
	}
	public function obj_quadratica_medio() {
		$this->load->view('paginas/obj_quadratica_medio');		
		
	}
	
	
	public function ensino_superior() {
		$this->load->view('paginas/ensino_superior');		
		
	}
	
	public function obj_afim_superior() {
		$this->load->view('paginas/obj_afim_superior');		
		
	}
	public function obj_quadratica_superior() {
		$this->load->view('paginas/obj_quadratica_superior');		
		
	}
	
	public function apresentacao_RP() {
		$this->load->view('paginas/apresentacao_RP');		
		
	}
	
	public function questoes_enemof() {
		$this->load->view('paginas/questoes_enemof');		
		
	}
	
	
	public function questoes_obmep() {
		$this->load->view('paginas/questoes_obmep');		
		
	}
	
	public function questoes_vestibulares() {
		$this->load->view('paginas/questoes_vestibulares');		
		
	}
	
	public function questoes_analisecombinatoria() {
		$this->load->view('paginas/questoes_analisecombinatoria');		
		
	}
	
	public function questoes_trigonometria() {
		$this->load->view('paginas/questoes_trigonometria');		
		
	}
	
	public function questoes_funcoespolinomiais() {
		$this->load->view('paginas/questoes_funcoespolinomiais');		
		
	}

	
	public function questoes_geometriaplana() {
		$this->load->view('paginas/questoes_geometriaplana');		
		
	}
	
	
	public function questoes_grandezas() {
		$this->load->view('paginas/questoes_grandezas');		
		
	}
	
	
	
	public function questoes_fuvest() {
		$this->load->view('paginas/questoes_fuvest');		
		
	}
	
	public function questoes_unicamp() {
		$this->load->view('paginas/questoes_unicamp');		
		
	}
	
	public function questoes_ufla() {
		$this->load->view('paginas/questoes_ufla');		
		
	}
	
	public function pibid() {
		$this->load->view('paginas/pibid');		
		
	}
	
	public function residencia() {
		$this->load->view('paginas/residencia');		
		
	}
	
	public function sematoficial() {
		$this->load->view('paginas/sematoficial');		
		
	}
	
	public function semat2015() {
		$this->load->view('paginas/semat2015');		
		
	}
	
	public function semat2016() {
		$this->load->view('paginas/semat2016');		
		
	}
	
	public function semat2017() {
		$this->load->view('paginas/semat2017');		
		
	}
	
	public function semat2018() {
		$this->load->view('paginas/semat2018');		
		
	}
	

	public function publicacoes() {
		$this->load->view('paginas/publicacoes');		
		
	}
	
	public function obj_exponencial_superior_off() {
		$this->load->view('paginas/obj_exponencial_superior_off');		
		
	}
	
	public function obj_exponencial_medio() {
		$this->load->view('paginas/obj_exponencial_medio');		
		
	}
	public function obj_exponencial_parte1_superior() {
		$this->load->view('paginas/obj_exponencial_parte1_superior');		
		
	}
	
	public function obj_exponencial_parte2_superior() {
		$this->load->view('paginas/obj_exponencial_parte2_superior');		
		
	}
	
	
	
	
	public function obj_logaritmica_superior_off() {
		$this->load->view('paginas/obj_logaritmica_superior_off');		
		
	}
	
	public function obj_logaritmica_medio() {
		$this->load->view('paginas/obj_logaritmica_medio');		
		
	}
	public function obj_logaritmica_parte1_superior() {
		$this->load->view('paginas/obj_logaritmica_parte1_superior');		
		
	}
	
	public function obj_logaritmica_parte2_superior() {
		$this->load->view('paginas/obj_logaritmica_parte2_superior');		
		
	}
	

	
	public function jogos_africanos() {
		$this->load->view('paginas/jogos_africanos');		
		
	}
	
	public function jogo_matcho() {
		$this->load->view('paginas/jogo_matcho');		
		
	}
	
	public function jogo_yote() {
		$this->load->view('paginas/jogo_yote');		
		
	}
	
	public function obj_relacoes_trigonometricas() {
		$this->load->view('paginas/obj_relacoes_trigonometricas');		
		
	}
	
	public function obj_relacoes_entre_areas() {
		$this->load->view('paginas/obj_relacoes_entre_areas');		
		
	}
	
	public function questoes_offifsul() {
		$this->load->view('paginas/questoes_offifsul');		
		
	}
	
	public function questoes_ifsuldeminas_integrado() {
		$this->load->view('paginas/questoes_ifsuldeminas_integrado');		
		
	}
	
	public function questoes_ifsuldeminas_superior() {
		$this->load->view('paginas/questoes_ifsuldeminas_superior');		
		
	}
	
	public function questoes_ifsuldeminas_tecnico() {
		$this->load->view('paginas/questoes_ifsuldeminas_tecnico');		
		
	}
	
	public function questoes_enade() {
		$this->load->view('paginas/questoes_enade');		
		
	}
	
	public function enade_2017() {
		$this->load->view('paginas/enade_2017');		
		
	}
	
	public function enade_2014() {
		$this->load->view('paginas/enade_2014');		
		
	}
	
	
	public function enade_2011() {
		$this->load->view('paginas/enade_2011');		
		
	}
	
	
	public function enade_2008() {
		$this->load->view('paginas/enade_2008');		
		
	}
	
	
	public function enade_2005() {
		$this->load->view('paginas/enade_2005');		
		
	}
	
	
	
	
	
	
	
	
	
}
