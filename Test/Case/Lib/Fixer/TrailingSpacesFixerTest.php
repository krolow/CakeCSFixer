<?php
App::uses('CakeCSFixerTest', 'CakeCSFixer.Test/Case/Lib/Fixer');
App::uses('TrailingSpacesFixer', 'CakeCSFixer.Lib/Fixer');

class TrailingSpacesFixerTest extends CakeCSFixerTest {
	
	public function setUp() {
		parent::setUp();
	}

	public function testFix() {
		$fixer = new TrailingSpacesFixer();
		$contentWrong = $this->getAssert('TrailingSpacesWrong.php');
		$contentFixed = $this->getAssert('TrailingSpacesFixed.php');
		$result = $fixer->fix($contentWrong);
		$this->assertEqual($result, $contentFixed);
	}

}