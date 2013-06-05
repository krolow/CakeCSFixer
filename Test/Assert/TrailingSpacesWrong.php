<?php
class Trailing {	
	
	public function thisIsTheName() {
		$this->doesSomething(); 
		for ($i = 0; $i<10; $i++) { 
			$this->testing();             	
		}
	}	

}