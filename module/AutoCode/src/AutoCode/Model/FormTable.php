<?php 

namespace AutoCode\Model;

use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\TableGateway;

class FormTable extends AbstractTableGateway{
	protected $_tableGateway;

	public function __construct(TableGateway $tableGateway){
		$this->_tableGateway = $tableGateway;
		return $this;
	}

	public function listItem($arrParam = null,$options = null){
		$result =   $this->_tableGateway->select(function(Select $select) use($arrParam){
			$select->columns(array( "id","name","content","user_id","created_date","description"))
				   ->join(array("u"=>"users"),
				   		  "u.id = forms.user_id",
				   		  array("username"=>"name"),
				   		  "left"
				   	)
				   ->order(array('forms.created_date ASC'));
		})->toArray();
	
		return $result;
	}

	public function getItemById($id = null,$options = null){
		if(!empty($id)){
			$result =   $this->_tableGateway->select(function(Select $select) use($id){
				$select->columns(array( "id","name","content","user_id","created_date","description"))
					   ->where->equalTo("id",$id);
			})->current();

			return $result;
		}
	}

	public function saveForm($data = null,$options = null){
		if(!empty($data)){
			$insertData = $this->setData($data,$options);

			$this->_tableGateway->insert($insertData);

			return $this->_tableGateway->lastInsertValue;
		}
	}

	public function updateForm($data,$options = null){
		if(!empty($data)){
			
			$data['element'] = $this->setSerializeString($data['element']);
			
			$insertData      = $this->setData($data,$options);

			$this->_tableGateway->update($insertData,array("id" => $data['formId']));
		}			
		
		return $this->_tableGateway->getLastInsertValue();
	}

	private function setData($data,$options = null){
        $insert = array();

        if($options['type'] == 'draf'){
			$insert['name']         = ($data['nameForm']);
			$insert['created_date'] = time(); 
			$insert['status']       = 'draf';
			$insert['user_id']      = (int)($data['user_id']);
        }

        if($options['type'] == 'addElement'){
			$insert['content'] = trim($data['element']);
			$insert['status']  = 'active';
        }
                            
        return $insert;
    }

    private function setSerializeString($elementString){
		$element = array();
		parse_str($elementString,$element);
			
		$element['type']       = $element['typeElement'] ;
		$element['name']       = $element['nameElement'] ;
		$element['attribute'] = $element[$element['name']]['attribute'] ;
		$element['option']    = $element[$element['name']]['option'] ;
		$element['validate']['name']   = $element[$element['name']]['validateName'] ;
		$element['validate']['breakchain']   = $element[$element['name']]['validateBreakChain'] ;
		$element['validate']['option']   = $element[$element['name']]['validateOption'] ;
		$element['filter']['name']   = $element[$element['name']]['filterName'] ;
		$element['filter']['option']   = $element[$element['name']]['filterOption'] ;
		unset($element['filterElement']);
		unset($element['validateElement']);
		unset($element['typeElement']);
		unset($element['nameElement']);
		unset($element[$element['name']]);

		$content = array(
			$element['name'] => $element
		);

		return  serialize($content);
	}
           
}
?>