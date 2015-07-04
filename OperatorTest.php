<?php
require 'captcha.php';
class OperatorTest extends PHPUnit_Framework_TestCase {
    function testOperatorShouldBePlus() {
        $this->assertEquals("+", createOperator(1));
    }
    function testOperatorShouldBeMinus() {
        $this->assertEquals("-", createOperator(2));
    }
    function testOperatorShouldBeMultiply() {
        $this->assertEquals("*", createOperator(3));
    }
}
 ?>
