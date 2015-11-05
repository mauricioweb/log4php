<?php
namespace Log\dao;
date_default_timezone_set('America/Sao_Paulo');
include __DIR__."/../lib/log4php/Logger.php";
\Logger::configure(__DIR__.'/../lib/log4php/config.xml');

use Log\model\Pessoa;

class PessoaDao{

	public function salvar(Pessoa $pessoa){
		if(1 == 1){
			$logger = \Logger::getLogger("myLogger");
			$logger->error("Explodiu o banco de dados");
			throw new \Exception("Erro no banco de dados");
		}

	}
}