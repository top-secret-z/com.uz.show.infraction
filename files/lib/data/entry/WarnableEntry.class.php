<?php
namespace show\data\entry;
use wcf\data\DatabaseObjectDecorator;
use wcf\data\TUserContent;
use wcf\system\infraction\warning\IWarnableObject;

/**
 * Warnable object implementation for Display Window entries.
 * 
 * @author		2018-2022 Zaydowicz
 * @license		GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package		com.uz.show.infraction
 */
class WarnableEntry extends DatabaseObjectDecorator implements IWarnableObject {
	use TUserContent;
	
	/**
	 * @inheritDoc
	 */
	protected static $baseClass = Entry::class;
	
	/**
	 * @inheritDoc
	 */
	public function getLink() {
		return $this->getDecoratedObject()->getLink();
	}
	
	/**
	 * @inheritDoc
	 */
	public function getObjectID() {
		return $this->entryID;
	}
	
	/**
	 * @inheritDoc
	 */
	public function getTitle() {
		return $this->getDecoratedObject()->getTitle();
	}
}
