<?php
namespace Log\service;

use Log\model\Pessoa;
use Log\dao\PessoaDao;

class PessoaService{

	private $dao;

	public function __construct(PessoaDao $dao){
		$this->dao = $dao;
	}


	public function salvar(Pessoa $pessoa){
		$this->dao->salvar($pessoa);
	}

}