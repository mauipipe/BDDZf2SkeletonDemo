<?php
namespace DemoModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
   
    public function __construct() 
    {
       
    }
    
    /**
     * Returns a list of books, as fethched from model
     * 
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction() {
        
    	return new ViewModel();
        
    }
       
}
