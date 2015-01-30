<?php
class CaptchaController {
	function __construct(CaptchaService $captchaService=null) {
		if($captchaService != null){
			$this->captchaService = $captchaService;	
		}else{
			$this->captchaService = new CaptchaService();
		}
	}

	public function getCaptcha() {
		return $this->captchaService->getCaptcha()->toString();
	}
}