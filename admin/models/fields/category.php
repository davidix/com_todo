<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");
JFormHelper::loadFieldClass('list');

/**
 * Form field for Category items.
 *
 * @package		Todo
 * @subpackage	Fields
 */
class JFormFieldCategory extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  11.1
	 */
	protected $type = 'category';

	/**
	 * Method to get the field options.
	 *
	 * @return  array  The field option objects.
	 *
	 * @since   11.1
	 */
	protected function getOptions()
	{
		$db = JFactory::getDbo();
		$user = JFactory::getUser();
		$options = array();
		
		$query = $db->getQuery(true);
		$query->select("a.id, a.name")->from("#__todo_category as a");

		if (!$user->authorise('core.admin', 'com_todo'))
		{
			$query->where('a.created_by = ' . $user->get('id'));
		}

		// Implement View Level Access
		$user = JFactory::getUser();
		if (!$user->authorise('core.admin'))
		{
			$groups = implode(',', $user->getAuthorisedViewLevels());
			$query->where('a.access IN (' . $groups . ')');
		}

		$db->setQuery($query);
		
		foreach ($db->loadObjectList() as $item)
		{
			// Create a new option object based on the <option /> element.
			$tmp = JHtml::_('select.option', $item->id, $item->name);

			// Add the option object to the result set.
			$options[] = $tmp;
		}

		// Merge any additional options in the XML definition.
		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
?>