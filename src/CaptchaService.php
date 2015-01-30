<?php 
class CaptchaService {	
	function __construct(Randomizer $randomizer=null) {
		if($randomizer != null){
			$this->randomizer = $randomizer;
		}else{
			$this->randomizer = new Randomizer();
		}
	}
	
	function getCaptcha() {
		$randomizer = $this->randomizer;
		return new Captcha(
			$randomizer->getPattern(),
			$randomizer->getOperand(),
			$randomizer->getOperator(),
			$randomizer->getOperand()
			);
	}
}
 ?>