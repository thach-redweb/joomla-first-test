<?php
defined('_JEXEC') or die('Restricted access admin/views/helloworlds/view.html/php');

class HelloWorldViewHelloWorlds extends JViewLegacy
{
    function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');

        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode('<br/>', $errors));
            return false;
        }
        parent::display($tpl);
    }
}