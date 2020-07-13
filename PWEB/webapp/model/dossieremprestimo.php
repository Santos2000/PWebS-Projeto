<?php

class DossierEmprestimo
{
	public $data;
	public $nome;
	public $despesas;
	public $credito;
	public $numprestacoes;
	public $planoPagamento;

	//Construtor
	public function __construct($data, $nome, $despesas, $credito, $numprestacoes, $planoPagamento)
	{
		$this->data = $data;
		$this->nome = $nome;
		$this->despesas = $despesas;
		$this->credito = $credito;
		$this->numprestacoes = $numprestacoes;
		$this->planoPagamento = $planoPagamento;
	}
}
?>