<?php

defined('_JEXEC') or die('Restricted access site helloworld');

//Get an instance of the controller prefixed by Helloworld
$controller = JControllerLegacy::getInstance('HelloWorld');

//Perform the Request task
$input = JFactory::getApplication()->input;
$controller -> execute($input -> getCmd('task'));

//Redirect if set by the controller
$controller -> redirect();