<?php

namespace Demo;

use Demo\Form;
use Demo\Form\FormContact;
use Demo\Form\FormContactFilter;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module implements AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                   __NAMESPACE__ => __DIR__."/src/".__NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return array_merge(
			include __DIR__."/config/module.config.php",
			include __DIR__."/config/router.config.php"
		);	
    }

    public function onBootstrap(MvcEvent $e)
    {
        // You may not need to do this if you're doing it elsewhere in your
        // application
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $adapter = $e->getApplication()->getServiceManager()->get("Zend\Db\Adapter\Adapter");
    }

    public function getFormElementConfig(){
        return array(
               "factories" => array(
                    "formContactDemo" => function($sm){
                         $form = new FormContact();
                         $form->setInputFilter(new FormContactFilter());
                         return $form;
                    },
               )
        );
    }

}
