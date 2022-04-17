<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

/**
 * Todo Component Category Tree
 *
 * @static
 * @package     Todo
 * @subpackage  Helpers
 */
class TodoCategories extends JCategories
{
	/**
	 * Constructor
	 */
	public function __construct($options = array())
	{
		$options["extension"] = "com_todo";
		$options["table"] = "#__todo_category";
		$options["field"] = "catid";
		$options["key"] = "id";
		$options["statefield"] = "published";

		parent::__construct($options);
	}
}