<?php
defined('_JEXEC') or die('Restricted accecss admin/models/helloworlds.php');

class HelloWorldModelHelloWorlds extends JModelList
{
    protected function getListQuery()
    {
        //Initialize variables
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        //Create the base select statement.
        $query->select('*')->from($db->quoteName('#__helloworld'));

        return $query;
    }
}
