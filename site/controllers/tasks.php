<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

/**
 * Tasks list controller class.
 *
 * @package     Todo
 * @subpackage  Controllers
 */
class TodoControllerTasks extends JControllerAdmin
{
	/**
	 * The URL view list variable.
	 *
	 * @var    string
	 * @since  12.2
	 */
	protected $view_list = 'tasks';
	
	/**
	 * Get the admin model and set it to default
	 *
	 * @param   string           $name    Name of the model.
	 * @param   string           $prefix  Prefix of the model.
	 * @param   array			 $config  The model configuration.
	 */
	public function getModel($name = 'Task', $prefix='TodoModel', $config = array())
	{
		$config['ignore_request'] = true;
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
}
?>