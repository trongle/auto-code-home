<?php

namespace Demo\Controller;

use Demo\Form\FormUserFilter;
use Zend\Form\FormInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class DbController extends AbstractActionController
{

    public function indexAction(){
       	$table    =  $this->getServiceLocator()->get("CityTable");

    		$items    =  $table->listItem();

    		return new ViewModel(array(
    			"items"  => $items
    		));
    }

}
