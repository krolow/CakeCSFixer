<?php
abstract class CakeCSFixerTest extends CakeTestCase {
	
	public function getAssert($name) {
		return file_get_contents(dirname(dirname(dirname(dirname(__FILE__)))) . DS . 'Assert' . DS . $name);
	}

}