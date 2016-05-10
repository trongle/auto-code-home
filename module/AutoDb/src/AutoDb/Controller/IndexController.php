<?php

namespace AutoDb\Controller;

use Zend\Db\Metadata\Metadata;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	protected $_script = [];

	public function __construct(){
		//add script
    	$this->_script[] = 'https://cdnjs.cloudflare.com/ajax/libs/jquery-boilerplate/4.1.0/jquery.boilerplate.min.js';
	}

    public function indexAction()
    {	
    	$this->addScript();

    	//get ListTableName
		$listTableNames = $this->getListTableName();

		return array(
			'listTableNames' => $listTableNames
		);
    }   

    public function getListFieldAction(){
    	if($this->request->isXmlHttpRequest()){
    		$nameTable = $this->request->getPost('nameTable',0);

    		if($nameTable){
				$metaData       = $this->getMetaData();
				$listField      = $metaData->getColumns($nameTable);
				$listFieldNames = array();
				$listFieldTypes = array();

				foreach($listField as $field){
					$listFieldNames[$field->getName()] = $field->getDataType();
				}
    		}
    		
    		return new JsonModel(array(
                'listFieldNames' => $listFieldNames
            ));

    	}else{
    		echo "Not permission";
    	}
    }			

    protected function addScript(){
    	if(count($this->_script) > 0){
	    	$script = $this->getServiceLocator()->get('viewhelpermanager')->get('headScript');
	    	foreach($this->_script as $js){
	        	$script->appendFile($js);    		
	    	}
    	}
    }

    protected function getListTableName(){
		$metadata = $this->getMetaData();
		return  $metadata->getTableNames();
    }

    protected function getMetaData(){
    	$adapter        = $this->getServiceLocator()->get("dbconfig");
		return new Metadata($adapter);
    }
}
