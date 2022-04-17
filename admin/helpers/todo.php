<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

/**
 * Todo helper class.
 *
 * @package     Todo
 * @subpackage  Helpers
 */
class TodoHelper
{
	public static function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_TODO_SUBMENU_TODO_CATEGORY'), 
			'index.php?option=com_todo&view=categories', 
			$vName == 'categories'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_TODO_SUBMENU_TODO_TASK'), 
			'index.php?option=com_todo&view=tasks', 
			$vName == 'tasks'
		);

	}
	
	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @return	JObject
	 * @since	1.6
	 */
	public static function getActions()
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		$assetName = 'com_todo';

		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
		);

		foreach ($actions as $action) {
			$result->set($action, $user->authorise($action, $assetName));
		}

		return $result;
	}
	

}