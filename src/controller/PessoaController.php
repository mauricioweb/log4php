<?php
namespace Log\controller;
require_once __DIR__."/../../vendor/autoload.php";


use Log\service\PessoaService;
use Log\dao\PessoaDao;
use Log\model\Pessoa;

class PessoaController{

	private $service;

	public function __construct($service){
		$this->service = $service;
	}

	public function salvar(Pessoa $pessoa){
		$this->service->salvar($pessoa);
	}

}

$dao = new PessoaDao();
$service = new PessoaService($dao);
$controller = new PessoaController($service);

try{
	$controller->salvar(new Pessoa());	
}catch(\Exception $e){
	echo "Mensagem bonitinha pro usuario\n";
}
