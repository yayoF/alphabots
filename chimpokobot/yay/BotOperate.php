<?php
require_once 'vendor/eos-1.0.0/eos.class.php';
class BotOperate
{
    private $result;
    public static $chiste;

    public function __construct()
    {
        $this->result = "";
        $this->chiste = "";
    }

    public function setResult($value){
    	$this->result = $value;
    }

    public function getResult(){
    	return $this->result;
    }

	public static function setChiste($value){
    	self::$chiste = $value;
    }

    public static function getChiste(){
    	return self::$chiste;
    }    

    public function randomResponse($value){
		$randomNumber =rand(0,3);
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

	public function getChimpoAvisa(){
		$randomNumber =rand(0,2);
		$resultQuote = "";
		switch($randomNumber){
			case 0:
				$resultQuote = "uno cat";
				break;
			case 1:
				$resultQuote = "rusharon medio";
				break;
			case 2:
				$resultQuote = "No, ya no voy medio";
				break;
			default:
				$resultQuote = "nada."
			;
		}
	    return $resultQuote;
	}


	public function getQueSomos(){
		$randomNumber =rand(0,3);
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
