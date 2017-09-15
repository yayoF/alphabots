<?php
require_once 'vendor/eos-1.0.0/eos.class.php';
class BotOperate
{
    private $result;

    public function __construct()
    {
        $this->result = "";
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
				$resultQuote = "default";
		}
	    return $resultQuote;
	}

	public function sanitizeStringPeruvian($rawValue){

		return strtolower($rawValue);
	}

}
