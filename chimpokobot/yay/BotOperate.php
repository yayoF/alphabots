<?php
require_once 'vendor/eos-1.0.0/eos.class.php';
class BotOperate
{
    private $result;

    public function __construct()
    {
        $this->result = "";
    }


	public function chikiRefranes(){
		$randomNumber =rand (0,3);
		$resultQuote = "";
		switch($randomNumber){
			case 0:
				$resultQuote = "🍁Más vale pava en mano que moño rodando.";
				break;
			case 1:
				$resultQuote = "🍁No busques la pepa en el wiro ajeno.";
				break;
			case 2:
				$resultQuote = "🍁Camaron con la pálida se vuelve una crisálida.";
				break;
			default:
				$resultQuote = "🍁A wiro regalado no se le buscan pepas."
			;
		}
	    return $resultQuote;
	}

	public function getQueSomos(){
		$randomNumber =rand (0,3);
		$resultQuote = "";
		switch($randomNumber){
			case 0:
				$resultQuote = "Leones.";
				break;
			case 1:
				$resultQuote = "Huevones.";
				break;
			case 2:
				$resultQuote = "Chimporrocotones.";
				break;
			default:
				$resultQuote = "Somos sicarios del cartel de Medellín."
			;
		}
	    return $resultQuote;
	}

	public function getEliResponses(){
		$randomNumber = rand(0,2);
		$resultQuote = "";

		switch($randomNumber){
			case 0:
				$resultQuote = "Eli? Duro contra el muro.";
				break;
			case 1:
				$resultQuote = "Sáquenle el dedo.";
				break;
			case 2:
				$resultQuote = "Eli, no soy un moreno de mier.";
				break;
			default:
				$resultQuote = "";
			;
		}
	    return $resultQuote;
	}

	public function sanitizeStringPeruvian($rawValue){

		return strtolower($rawValue);
	}

}
