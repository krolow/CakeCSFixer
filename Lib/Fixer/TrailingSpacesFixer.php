<?php
/**
* Remove trailing spaces at end of lines
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

class TrailingSpacesFixer implements FixerInterface {
	
/**
 * Remove trailing spaces at end of lines
 * 
 * @param string $content Content that you want to fix
 * 
 * @return string Content fixed
 */
	public function fix($content) {
		$content = preg_replace('/[ \t]+$/m', '', $content);
		
		return $content;
	}

}