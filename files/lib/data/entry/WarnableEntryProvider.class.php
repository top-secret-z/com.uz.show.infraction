<?php
namespace show\data\entry;

/**
 * Object type provider for Display Window entries.
 * 
 * @author		2018-2022 Zaydowicz
 * @license		GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package		com.uz.show.infraction
 */
class WarnableEntryProvider extends EntryProvider {
	/**
	 * @inheritDoc
	 */
	public $decoratorClassName = WarnableEntry::class;
}
