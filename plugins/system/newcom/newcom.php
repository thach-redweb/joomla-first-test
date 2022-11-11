<?php
defined('_JEXEC') or die;

class PlgSystemNewcom extends JPlugin
{
    function onAfterInitialise(){
        // Nếu khớp chuỗi trả về 0
        if(strcmp("/joomla/",$_SERVER['REQUEST_URI']) == 0){
            $app = JFactory::getApplication();
            $url = JRoute::_("http://localhost/joomla/index.php?option=com_textmsg");
            $app -> redirect($url, 'Hello, this is Redirect to New Component Text Msg');
        }
    }
}