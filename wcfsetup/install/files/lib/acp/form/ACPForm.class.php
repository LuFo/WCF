<?php
namespace wcf\acp\form;
use wcf\form\AbstractForm;
use wcf\system\menu\acp\ACPMenu;

/**
 * Provides a default implementation for the show method in acp forms.
 * 
 * @author	Marcel Werk
 * @copyright	2001-2011 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	acp.form
 * @category 	Community Framework
 */
class ACPForm extends AbstractForm {
	/**
	 * active acp menu item
	 * @var string
	 */
	public $activeMenuItem = '';
	
	/**
	 * @see wcf\page\IPage::show()
	 */
	public function show() {
		// set active acp menu item
		if (!empty($this->activeMenuItem)) {
			ACPMenu::getInstance()->setActiveMenuItem($this->activeMenuItem);
		}
		
		parent::show();
	}
}
