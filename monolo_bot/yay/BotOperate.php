<?php
require_once 'vendor/eos-1.0.0/eos.class.php';
class BotOperate
{
    private $result;

    public function __construct()
    {
        $this->result = "";
    }

	public function chikicalc($operationString){
	    $equation = $operationString;
		$eq = new eqEOS();
		$result = $eq->solveIF($equation);

		$chikifactor = $result - 420;
		$chikival = "🍁420 + ".$chikifactor;

	    return $chikival;
	}

	public function chikiRecetaBrownie(){
	    $fullString = "1/2 tazas de Harina 
						200 gramos de mantequilla (se puede utilizar igual cantidad de mantequilla cannábica)
						2 tazas de azúcar\n
						4 huevos batidos\n
						3/4 de taza de cacao
						1/2 cdta. de polvo de hornear
						1 taza de nueces picadas
						1/2 cdta. de vainilla
						Pizca de sal
						4,5 gramos de marihuana (para 9 porciones)";

	    return $fullString;
	}

}