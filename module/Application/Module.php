<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    // Controller configuration
    public function getControllerConfig() {
        
        return array(
           'invokables' => array(
                
                'Application\Controller\Index' => 'Application\Controller\IndexController',
                
            ),
        );
        
    } 
    
    // Service Manager Configuration
    public function getServiceConfig() 
    {
    	return array(
             'aliases' => array(
                'book.service' => 'Application\Service\BookService',
                'author.service' => 'Application\Service\AuthorService',
               'form' => 'Application\Form\Book'
             ),   
             'factories' => array(
                
                // Services
                'Application\Service\BookService' => 'Application\Service\BookServiceFactory',
                'Application\Service\AuthorService' => 'Application\Service\AuthorServiceFactory',
                
                // Form
                'Application\Form\Book' => 'Application\Form\BookFactory',
                
            )
        );
        
    }            
                
}
