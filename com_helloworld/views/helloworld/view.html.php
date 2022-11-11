<?php

defined('_JEXEC') or die('Restricted access view html php');

class HelloWorldViewHelloWorld extends JViewLegacy
{
    function display($tpl = null)
    {
        $this->msg = 'Hello World Msg';

        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JLog::add(implode('<br/>', $errors), JLog::WARNING, 'jerror');
            return false;
        }
        //Display the view
        parent::display($tpl);
    }
}