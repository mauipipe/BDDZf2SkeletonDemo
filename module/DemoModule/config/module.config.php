<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModuleDemo for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ModuleDemo;

return array(
    'router' => array(
        'routes' => array(
            'module-demo' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/module-demo',
                    'defaults' => array(
                        'controller' => 'DemoModule\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                
            ),
                      
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
          
);
