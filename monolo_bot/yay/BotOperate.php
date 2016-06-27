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

		$chikifactor = $testoutput - 420;
		$chikival = "🍁420 + ".$chikifactor;

	    return $chikival;
	}
}