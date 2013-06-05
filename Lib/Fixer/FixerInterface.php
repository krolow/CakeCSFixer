<?php
/**
* Interface for fixers all fixers must implements this interface
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
interface FixerInterface {
	
/**
 * Called to fix a given content
 * 
 * @param string $content Content to fix
 * 
 * @return string Content fixed
 */
	public function fix($content);

}