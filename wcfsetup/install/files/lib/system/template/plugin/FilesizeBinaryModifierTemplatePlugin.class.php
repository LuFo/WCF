<?php
namespace wcf\system\template\plugin;
use wcf\system\template\TemplateEngine;
use wcf\util\FileUtil;

/**
 * The 'filesize' modifier formats a filesize (binary) (given in bytes).
 * 
 * Usage:
 * {$string|filesizeBinary}
 * {123456789|filesizeBinary}
 *
 * @author 	Marcel Werk
 * @copyright	2001-2009 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.template.plugin
 * @category 	Community Framework
 */
class FilesizeBinaryModifierTemplatePlugin implements IModifierTemplatePlugin {
	/**
	 * @see wcf\system\template\IModifierTemplatePlugin::execute()
	 */
	public function execute($tagArgs, TemplateEngine $tplObj) {
		return FileUtil::formatFilesizeBinary($tagArgs[0]);
	}
}
