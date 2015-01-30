<?php
/**
* 
*/
class CaptchaControllerTest extends PHPUnit_Framework_TestCase
{
	function testGetCaptcha()
	{
		$captchaServiceStub = $this->getMock('CaptchaService');
		$captchaServiceStub->expects($this->once())
			->method('getCaptcha')
			->will($this->returnValue(new Captcha(1, 1, 1, 1)));
		$captchaController = new CaptchaController($captchaServiceStub);
		$captchaController->getCaptcha();
	}
}