<?php
include_once('./src/ClassToTest.php');
class CTT extends PHPUnit_Framework_TestCase{
	public function testConstructor(){
		$ct = new ClassToTest();
		$this->assertEquals(3,$ct->getVar1());	
		$this->assertEquals(4,$ct->getVar2());	
	}

	public function testSetVar1(){
		$ct = new ClassToTest();
		$ct->setVar1(5);
		$this->assertEquals(5,$ct->getVar1());	
	}


	public function testSetVar2(){
		$ct = new ClassToTest();
		$ct->setVar2(6);
		$this->assertEquals(6,$ct->getVar2());	
	}

	public function testAdd(){
		$this->assertEquals(10,ClassToTest::add(5,5));
	}


}
?>
