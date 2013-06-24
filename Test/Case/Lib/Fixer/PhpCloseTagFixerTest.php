<?php
App::uses('CakeCSFixerTest', 'CakeCSFixer.Test/Case/Lib/Fixer');
App::uses('PhpCloseTagFixer', 'CakeCSFixer.Lib/Fixer');

class PhpCloseTagFixerTest extends CakeCSFixerTest {

	public function setUp() {
		parent::setUp();
	}

	public function testCloseTag() {
		$fixer = new PhpCloseTagFixer();

		$wrong = <<<TEST
<?php
class TestingController extends AppController {
	
	public function index() {

	}

}
?>
TEST;
		$correct = <<<TEST
<?php
class TestingController extends AppController {
	
	public function index() {

	}

}

TEST;
		$this->assertEqual($correct, $fixer->fix($wrong));
		$wrong = <<<TEST
<?php
class TestingController extends AppController {
	
	public function index() {

	}

}

class Test {
	
}
?>
TEST;

		$correct = <<<TEST
<?php
class TestingController extends AppController {
	
	public function index() {

	}

}

class Test {
	
}

TEST;
		$this->assertEqual($correct, $fixer->fix($wrong));
		$correct = <<<TEST
SOME TEXT BEFORE
<?php echo 'yes'; ?>
TEST;
		$this->assertEqual($correct, $fixer->fix($correct));
		$correct = <<<TEST
<?php
class MyModel extends OtherModel {

	public function getCloseTag() {
		return '?>'
	}

}
TEST;
		$this->assertEqual($correct, $fixer->fix($correct));
		$wrong = <<<TEST
<?php
class MyModel extends OtherModel {

	public function getCloseTag() {
		return '?>'
	}

}
?>
TEST;
		$correct = <<<TEST
<?php
class MyModel extends OtherModel {

	public function getCloseTag() {
		return '?>'
	}

}

TEST;
		$this->assertEqual($correct, $fixer->fix($wrong));
	}
}