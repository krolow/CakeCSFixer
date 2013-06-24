<?php
/**
* Remove close PHP tag
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

class PhpCloseTagFixer implements FixerInterface {

/**
 * Fixes the close PHP tag remove when it appears
 * 
 * @param string $content Content that you want to fix
 * 
 * @return string Content fixed
 */
	public function fix($content) {
		$content = $this->_fixesCloseTag($content);

		return $content;
	}

/**
 * Removes the close tag in the end of files
 * 
 * @return string Content without close tag in the end
 */
	protected function _fixesCloseTag($content) {
		if (strpos($content, '<?php') === 0) {
			return preg_replace('/.*(\?>)$/', '', $content);
		}

		return $content;
	}

}