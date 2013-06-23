<?php
/**
* Put the brackets in the right place
*
* PHP 5.3
*
*
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
* @version       0.1
* @link          https://github.com/krolow/CakeCSFixer
* @package       CakeCSFixer.Lib.Fixer
* @author        Vinícius Krolow <krolow@gmail.com>
* @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
*/
App::uses('FixerInterface', 'CakeCSFixer.Lib/Fixer');

class BracketFixer implements FixerInterface {
	
/**
 * Fixes the brakets 
 * 
 * @param string $content Content that you want to fix
 * 
 * @return string Content fixed
 */
	public function fix($content) {
		$content = $this->_fixesClassBrakets($content);
		$content = $this->_fixesFunctionBrakets($content);
		return $content;
	}

/**
 * Fixes the brackets for class|interface|trait declarion
 * 
 * @param string $content Content that you want to fix
 * 
 * @return string content fixed
 */
	protected function _fixesClassBrakets($content) {
		return preg_replace(
			'/^([ \t]*)((?:[\w \t]+ )?(class|interface|trait) [\w, \t\\\\]+?)[ \t]*\n{\s*$/m',
			"$2 {\n",
			$content
		);
	}

/**
 * Fixes the brackets for methods
 * 
 * @param string $content Content that you want to fix
 * 
 * @return string content fixed
 */
	protected function _fixesFunctionBrakets($content) {
		return preg_replace(
			'/^([\s\t].*?)\n.*?{$/m',
			"$1 {",
			$content
		);
	}

}