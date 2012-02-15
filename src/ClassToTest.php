<?php
/*
 * This is just a test class
 */
class ClassToTest{

	private $var1=1;
	private $var2=2;
	

	function __construct(){
		$this->var1=3;
		$this->var2=4;
	}

	public function getVar1(){
		return $this->var1;
	}

	public function getVar2(){
		return $this->var2;
	}

	public function setVar1($var1){
		$this->var1=$var1;
	}

	public function setVar2($var2){
		$this->var2=$var2;
	}

	public static function add($var1,$var2){
		return $var1+$var2;
	}

}//EOC


?>
