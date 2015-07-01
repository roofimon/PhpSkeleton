<?php
require "app.php";
class CaptchaTest extends PHPUnit_Framework_TestCase {
    /*
    function testLeftOperandShouldBeOne(){
        $captcha = new Captcha(1, 1, 1, 1);
        $leftOperand = $captcha->getLeftOperand();
        $this->assertEquals("One", $leftOperand->toString());

    }   

    function testResultOperatorShouldBePlus() {
        $captcha = new Captcha(1, 1, 1, 1);
        $operator = $captcha->getOperator();
        $this->assertEquals("+", $operator->toString());
    }

    function testRightOperandShouldBe1(){
        $captcha = new Captcha(1, 1, 1, 1);
        $rightOperand = $captcha->getRightOperand();
        $this->assertEquals("1", $rightOperand->toString());
    }

    function testLeftOperandShouldBe1(){
        $captcha = new Captcha(2, 1, 1, 1);
        $leftOperand = $captcha->getLeftOperand();
        $this->assertEquals("1", $leftOperand->toString());

    }

    function testRightOperandShouldBeOne() {
        $captcha = new Captcha(2, 1, 1, 1);
        $rightOperand = $captcha->getRightOperand();
        $this->assertEquals("One", $rightOperand->toString());
    }
     */
    function testResultCaptchaWhenLeftOperandIsString() {
        $captcha = new Captcha();
        $result = $captcha->toString(1, 1, 1, 1);
        $this->assertEquals("One + 1",$result);
    }
    function testResultCaptchaWhenLeftOperandIsInteger() {
        $captcha = new Captcha();
        $result = $captcha->toString(2, 1, 1, 1);
        $this->assertEquals("1 + One",$result);
    }
    /*
    function testExceptionCaptchaWhenLeftOperandIsZero() {
        try {
            $captcha = new Captcha(2, 0, 1, 1);
            $this->fail("Invalid Range Operand");
        } catch (InvalidRangeException $e) {

        }

    }
     */
}
