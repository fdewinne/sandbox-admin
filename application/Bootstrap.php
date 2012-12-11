<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * initialize the log managers
     * @return Zend_Log
     */
    public function _initLog()
    {
    	/* @var $log Zend_Log */
    	$log = $this->getPluginResource('log')->getLog();
    	Zend_Registry::set('Zend_Log', $log);
    	return $log;
    
    }
}
