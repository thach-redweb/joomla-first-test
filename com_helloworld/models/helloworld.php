<?php
defined('_JEXEC') or die('Restriced access models helloworld.php');

class HelloWorldModelHelloWorld extends JModelItem
{
    protected $messages;

    public function getTable($type = 'HelloWorld', $prefix = 'HelloWorldTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getMsg($id = 1)
    {
        if (!is_array($this->messages)) {
            $this->messages = array();
        }
        if (!isset($this->messages[$id])) {
            //Request the selected id
            $jinput = JFactory::getApplication()->input;
            $id = $jinput->get('id', 1, 'int');

            // Get a Table HelloWorld instance
            $table = $this->getTable();
            //Load the message
            $table->load($id);
            // Assign the message
            $this->messages[$id] = $table->greeting;
        }

        return $this->messages[$id];
    }
}
