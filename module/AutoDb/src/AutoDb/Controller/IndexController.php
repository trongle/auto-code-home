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
		$this->_script[] = URL_JS . '/jquery-ui.js';
	}

	public function indexAction(){
		$this->addScript();

		$listTableNames = $this->getListTableName();

		return array(
			'listTableNames' => $listTableNames
		);
	}

	public function getListFieldAction(){
		if($this->request->isXmlHttpRequest()){
			$nameTable = $this->request->getPost('nameTable',0);
			$action    = $this->request->getPost('action');
			$listField = '';
			$flagTable = '';
			if($nameTable){
				if($listField == '' || $flagTable != $nameTable){
					$flagTable      = $nameTable;

					$metaData       = $this->getMetaData();
					$listField      = $metaData->getColumns($nameTable);

					$listFieldNames = array();//for action view
					$fieldNames     = array();//for action autocomplete

					foreach($listField as $field){
						$listFieldNames[$field->getName()] = $field->getDataType();
						$fieldNames[] = $field->getName();
					}
				}

				if($action == 'view'){//handle for view field
					return new JsonModel(array(
						'listFieldNames' => $listFieldNames,
						'listFieldLiteral' => $fieldNames
					));
				}//end

			}
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
