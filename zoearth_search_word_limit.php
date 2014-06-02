<?php
defined('_JEXEC') or die ;
jimport('joomla.plugin.plugin');
jimport('joomla.html.parameter');

class plgSearchZoearth_Search_Word_Limit extends JPlugin
{
    function onContentSearchAreas()
    {
        return $this->onSearchAreas();
    }

    function onContentSearch($text, $phrase = '', $ordering = '', $areas = null)
    {
        return $this->onSearch($text, $phrase, $ordering, $areas);
    }
	
    function onSearchAreas()
    {
        //20140530 zoearth 修改最小搜尋字元數
        $lang = JFactory::getLanguage();
		$search_limit = (int)$this->params->get('search_limit',1);
		define("ZOEARTH_SEARCH_LIMIT",$search_limit);
        $lang->setLowerLimitSearchWordCallback(function(){return ZOEARTH_SEARCH_LIMIT;});
    }
    function onSearch($text, $phrase = '', $ordering = '', $areas = null)
    {
		return array();
	}
}
