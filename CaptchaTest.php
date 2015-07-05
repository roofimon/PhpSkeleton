<?php
require_once 'captcha.php';
require_once 'CaptchaController.php';
class CaptchaTest extends PHPUnit_Framework_TestCase {

    function testController(){
        $stubRandomizer = $this->getMock('Randomizer');
        $stubRandomizer->expects($this->any())
          ->method('pattern')
          ->will($this->returnValue(1));
        $stubRandomizer->expects($this->any())
            ->method('operator')
            ->will($this->returnValue(1));
        $stubRandomizer->expects($this->any())
              ->method('operand')
              ->will($this->returnValue(1));
        $controller = new CaptchaController($stubRandomizer);
        $captcha = $controller->buildCaptcha();
        $this->assertEquals("One + 1", $captcha->toString());
    }

    function testCaptcha1111ShouldBeOnePlus1() {
        $captcha = new Captcha(1, 1, 1, 1);
        $this->assertEquals("One + 1", $captcha->toString());
    }

    function testCaptcha1121ShouldBeOneMinus1() {
        $captcha = new Captcha(1, 1, 2, 1);
        $this->assertEquals("One - 1", $captcha->toString());
    }

    function testCaptcha2111ShouldBe1PlusOne() {
        $captcha = new Captcha(2, 1, 1, 1);
        $this->assertEquals("1 + One", $captcha->toString());
    }

    function testWheninputIs1111ResultShouldBeOnePlus1() {
        $this->assertEquals("One + 1", captcha(1, 1, 1 ,1));
    }
    function testWheninputIs1121ResultShouldBeOneMinus1() {
        $this->assertEquals("One - 1", captcha(1, 1, 2 ,1));
    }
    function testWheninputIs1131ResultShouldBeOneMultiply1() {
        $this->assertEquals("One * 1", captcha(1, 1, 3 ,1));
    }
    function testWheninputIs2111ResultShouldBe1PlusOne() {
        $this->assertEquals("1 + One", captcha(2, 1, 1 ,1));
    }
    function testWheninputIs2121ResultShouldBe1MinusOne() {
        $this->assertEquals("1 - One", captcha(2, 1, 2 ,1));
    }
    function testWheninputIs2121ResultShouldBe1MultiplyOne() {
        $this->assertEquals("1 * One", captcha(2, 1, 3 ,1));
    }
}
