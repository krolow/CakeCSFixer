<?php
App::uses('CakeCSFixerTest', 'CakeCSFixer.Test/Case/Lib/Fixer');
App::uses('IndentationFixer', 'CakeCSFixer.Lib/Fixer');

class IndentationFixerTest extends CakeCSFixerTest {
	
	public function setUp() {
		parent::setUp();
	}

	public function testFix() {
		$fixer = new IndentationFixer();
		$contentWrong = $this->getAssert('IndentationWrong.php');
		$contentFixed = $this->getAssert('IndentationFixed.php');
		$result = $fixer->fix($contentWrong);
		echo $contentWrong;
		echo $result;
		echo $contentFixed;
		$this->assertEqual($result, $contentFixed);
	}

}