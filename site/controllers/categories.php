<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

/**
 * Categories list controller class.
 *
 * @package     Todo
 * @subpackage  Controllers
 */
class TodoControllerCategories extends JControllerAdmin
{
	/**
	 * The URL view list variable.
	 *
	 * @var    string
	 * @since  12.2
	 */
	protected $view_list = 'categories';
	
	/**
	 * Get the admin model and set it to default
	 *
	 * @param   string           $name    Name of the model.
	 * @param   string           $prefix  Prefix of the model.
	 * @param   array			 $config  The model configuration.
	 */
	public function getModel($name = 'Category', $prefix='TodoModel', $config = array())
	{
		$config['ignore_request'] = true;
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
}
?>