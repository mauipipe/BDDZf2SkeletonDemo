<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Service\BookService;
use Application\Form\Book as BookForm;
use Application\Entity\Book;

class IndexController extends AbstractActionController
{
    
   
    public function __construct() 
    {
       
    }
    
    /**
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction() {
        
    	return new ViewModel();
        
    }
       
}
