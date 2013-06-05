<?php
class Indentation {

	public $wrong;

	public function correct() {
		$this->isCorrect();
	}

	public function wrong() {
		$this->replacePlease();
		$this->wrong();
	}

}