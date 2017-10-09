<?php
require_once 'vendor/eos-1.0.0/eos.class.php';
class BotOperate
{
    private $result;
    private static $chiste;

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
    	$this->chiste = $value;
    }

    public static function getChiste(){
    	return $this->chiste;
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
		$randomNumber =rand(0,3);
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
				$resultQuote = "Efectivamente es A"
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
				$resultQuote = "Ya no molesten a Eli, es mi novia.";
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
		$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
		$str = strtr($rawValue, $unwanted_array);

		return strtolower($str);
	}

}
