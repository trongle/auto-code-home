<?php

namespace AutoDb;

use AutoCode\Service\Authenticate\Authenticate;
use Zend\Authentication\Adapter\DbTable;
use Zend\Authentication\AuthenticationService;
use Zend\ModuleManager\Feature\ConsoleBannerProviderInterface;
use Zend\Console\Adapter\AdapterInterface as Console;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Stdlib\Hydrator\ObjectProperty;

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

    public function getViewHelperConfig(){
        return array(
            'invokables' => array(
                'listTableNames' => 'My\View\Helper\ListTableNames',
            )
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
        GlobalAdapterFeature::setStaticAdapter($adapter);
    }

    public function getServiceConfig(){
        return array(
            "factories" => array(
                
            ),
        );
    }

    public function getFormElementConfig(){
        return array(
            "factories" => array(           

            )
        );
    }

    private function getTableGateway($sm,$table = null,$entity = null){
        $adapter = $sm->get("Zend\Db\Adapter\Adapter");

        $resultSetPrototype = new HydratingResultSet();
        $resultSetPrototype->setHydrator(new ObjectProperty());
        $resultSetPrototype->setObjectPrototype($entity);

        return $tableGateway = new TableGateway($table,$adapter,null,$resultSetPrototype);
    }
}
