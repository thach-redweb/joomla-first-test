<?php
defined('_JEXEC') or die('Restricted access tables');

class HelloWorldTableHelloWorld extends JTable
{
    function __construct(&$db)
    {
        parent::__construct('#__helloworld', 'id', $db);
    }
}