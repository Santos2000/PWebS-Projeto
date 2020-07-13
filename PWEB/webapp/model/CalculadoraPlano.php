<?php
class CalculadoraPlano
{
	/*public function calculaPlano($credito, $numPrest, $abatimento, $posicaoAbatimento)
	{
		$valorPrestMensal = $credito / $numPrest;
		$dataInicial = strtotime("now");
		for ($i = 0; $i <$numPrest; $i++)
		{
			$d = strtotime( "+1 Months", $dataInicial);
			$credito -= $valorPrestMensal;
			$planoPrestacoes[$i][0] = date("d-m-Y", $d);
			$planoPrestacoes[$i][1] = $valorPrestMensal;
			$planoPrestacoes[$i][2] = date('l', $d);
			$planoPrestacoes[$i][4] = round($credito, 2);
			$dataInicial = $d;			
		}
		return $planoPrestacoes;
	}*/

	public function calculaPlano($credito, $numPrest, $abatimento, $posicaoAbatimento)
	{
		$posicaoAbatimento -= 1;
		$cont = $numPrest;
		
		$dataInicial = strtotime("now");
		for ($i = 0; $i <$numPrest; $i++)
		{
			$d = strtotime( "+1 Months", $dataInicial);
			$valorPrestMensal = $credito / $cont;
			$cont--;
			
			$planoPrestacoes[$i][0] = date("d-m-Y", $d);
			$planoPrestacoes[$i][1] = $valorPrestMensal;
			$planoPrestacoes[$i][2] = date('l', $d);
			if($i == $posicaoAbatimento)
			{
				$credito -= ($valorPrestMensal + $abatimento);
				$planoPrestacoes[$i][3] =  $abatimento;
			} else
			{
				$credito -= ($valorPrestMensal);
				$planoPrestacoes[$i][3] =  '0';
			}
			$planoPrestacoes[$i][4] = round($credito, 2);
			$dataInicial = $d;			

		}
		return $planoPrestacoes;

	}
}

?>