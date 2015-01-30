<?php 
class CaptchaServiceTest extends PHPUnit_Framework_TestCase{
	function testGetCaptcha()
	{
		$randomizerStub = $this->getMock('Randomizer');
		$randomizerStub->expects($this->any())
			->method('getPattern')
			->will($this->returnValue(1));
		$randomizerStub->expects($this->any())
			->method('getOperator')
			->will($this->returnValue(1));
		$randomizerStub->expects($this->any())
			->method('getOperand')
			->will($this->returnValue(1));
		$service = new CaptchaService($randomizerStub);
		$result = $service->getCaptcha();
		$this->assertEquals("One + 1",$result->toString());
	}

	function testGetCaptchaNoRandomizer() {
		$service = new CaptchaService();
		$result = $service->getCaptcha();
		$this->assertInstanceOf('Captcha', $result);
	}
 }

?>
