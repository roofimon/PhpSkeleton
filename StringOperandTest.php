<?php
require 'captcha.php';
class StringOperandTest extends PHPUnit_Framework_TestCase {
        function testOperandShouldBeOne() {
            $this->assertEquals("One", createStringOperand(1));
        }
        function testOperandShouldBeTwo() {
            $this->assertEquals("Two", createStringOperand(2));
        }
        function testOperandShouldBeNine() {
            $this->assertEquals("Nine", createStringOperand(9));
        }
}
 ?>
