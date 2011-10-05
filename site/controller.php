<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');
class JediTRACController extends JController {
	function display() {
		if(!JRequest::getVar('view')) {
			JRequest::setVar('view','jeditrac');
		}
		parent::display();
	}
}
?>