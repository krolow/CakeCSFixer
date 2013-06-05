<?php
App::uses('CakeCSFixerTest', 'CakeCSFixer.Test/Case/Lib/Fixer');
App::uses('BracketFixer', 'CakeCSFixer.Lib/Fixer');

class BracketFixerTest extends CakeCSFixerTest {
	
	public function setUp() {
		parent::setUp();
	}

	public function testFixesClassBrakets() {
		$wrong = <<<TEST
class TheNameOfClass extends TheExtendedClass
{

	public function code() {

	}

}
TEST;
		$correct = <<<TEST
class TheNameOfClass extends TheExtendedClass {

	public function code() {

	}

}
TEST;
		$fixer = new BracketFixer();
		$result = $fixer->fix($wrong);
		$this->assertEqual($result, $correct);
		$wrong = <<<TEST
class TheNameOfClass extends TheExtendedClass  
{

	public function code() {

	}

}
TEST;
		$correct = <<<TEST
class TheNameOfClass extends TheExtendedClass {

	public function code() {

	}

}
TEST;
		$result = $fixer->fix($wrong);
		$this->assertEqual($result, $correct);

		$wrong = <<<TEST
class TheNameOfClass extends TheExtendedClass implements TheInterface    
{

	public function code() {

	}

}
TEST;
		$correct = <<<TEST
class TheNameOfClass extends TheExtendedClass implements TheInterface {

	public function code() {

	}

}
TEST;

		$result = $fixer->fix($wrong);
		$this->assertEqual($result, $correct);
		$wrong = <<<TEST
abstract class TheNameOfClass extends TheExtendedClass implements TheInterface    
{

	public function code() {

	}

}
TEST;
		$correct = <<<TEST
abstract class TheNameOfClass extends TheExtendedClass implements TheInterface {

	public function code() {

	}

}
TEST;
		$fixer = new BracketFixer();
		$result = $fixer->fix($wrong);
		$this->assertEqual($result, $correct);
	}

	/*public function testFix() {
		$fixer = new TrailingSpacesFixer();
		$contentWrong = $this->getAssert('TrailingSpacesWrong.php');
		$contentFixed = $this->getAssert('TrailingSpacesFixed.php');
		$result = $fixer->fix($contentWrong);
		$this->assertEqual($result, $contentFixed);
	}*/

}